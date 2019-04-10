<?php


namespace App\Internal\Psr\Http\Message\Response;


use App\Internal\Psr\Http\Message\Stream\StreamInterface;
use Webmozart\Assert\Assert;

class Response implements ResponseInterface
{
    private $code;
    private $reasonPhrase;
    private $protocolVersion;
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

        $response = new static($this->code, $this->reasonPhrase);
        $response->protocolVersion = $version;

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @inheritDoc
     */
    public function hasHeader(string $name): bool
    {
        if (!\is_string($name)) {
            return false;
        }

        $headers = \array_change_key_case($this->headers);

        return isset($headers[\strtolower($name)]);
    }

    /**
     * @inheritDoc
     */
    public function getHeader(string $name): array
    {
        if (!$this->hasHeader($name)) {
            return [];
        }

        $headers = \array_change_key_case($this->headers);

        return $headers[strtolower($name)];
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
        // TODO: Implement withHeader() method.
    }

    /**
     * @inheritDoc
     */
    public function withAddedHeader(string $name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    /**
     * @inheritDoc
     */
    public function withoutHeader(string $name)
    {
        // TODO: Implement withoutHeader() method.
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

        $response = new static($this->code, $this->reasonPhrase);
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