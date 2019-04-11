<?php

namespace App\Internal\Psr\Http\Message\Response;

use App\Internal\Psr\Http\Message\Collection\CollectionInterface;
use App\Internal\Psr\Http\Message\Stream\StreamInterface;
use Webmozart\Assert\Assert;

class Response implements ResponseInterface
{
    private $code;
    private $reasonPhrase;
    private $protocolVersion;

    /** @var CollectionInterface */
    private $headers;
    private $body;

    public function __construct(int $code, string $reasonPhrase)
    {
        $this->code = $code;
        $this->reasonPhrase = $reasonPhrase;
    }

    /**
     * @inheritDoc
     */
    public function getProtocolVersion(): string
    {
        return $this->protocolVersion;
    }

    /**
     * @inheritDoc
     */
    public function withProtocolVersion(string $version)
    {
        Assert::string($version);

        $response = clone $this;
        $response->protocolVersion = $version;

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function getHeaders(): array
    {
        return $this->headers->ToArray();
    }

    /**
     * @inheritDoc
     */
    public function hasHeader(string $name): bool
    {
        if (!\is_string($name)) {
            return false;
        }

        return $this->headers->offsetExists($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeader(string $name): array
    {
        if (!$this->hasHeader($name)) {
            return [];
        }

        return $this->headers->offsetGet($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeaderLine(string $name): string
    {
        $headers = $this->getHeader($name);

        if (!empty($headers)) {
            return \implode(',', $headers);
        }

        return '';
    }

    /**
     * @inheritDoc
     */
    public function withHeader(string $name, $value)
    {
       Assert::string($name);
       Assert::isArray($value);

       return new static($this->code, $this->reasonPhrase);
    }

    /**
     * @inheritDoc
     */
    public function withAddedHeader(string $name, $value)
    {
        Assert::string($name);
        Assert::isArray($value);

        $response = clone $this;
        $response->headers = $this->headers->addElement($name, $value);

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function withoutHeader(string $name)
    {
        $response = clone $this;
        $response->headers = $this->headers->offsetUnset($name);

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function getBody(): StreamInterface
    {
        return $this->body;
    }

    /**
     * @inheritDoc
     */
    public function withBody(StreamInterface $body)
    {
        Assert::isInstanceOf($body, StreamInterface::class);

        $response = clone $this;
        $response->body = $body;

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function getStatusCode(): int
    {
        return $this->code;
    }

    /**
     * @inheritDoc
     */
    public function withStatus(int $code, $reasonPhrase = ''): ResponseInterface
    {
        Assert::length(3, $code);
        Assert::integer($code);

        return new static($code, $reasonPhrase ?? $this->reasonPhrase);
    }

    /**
     * @inheritDoc
     */
    public function getReasonPhrase(): string
    {
        return $this->reasonPhrase;
    }
}