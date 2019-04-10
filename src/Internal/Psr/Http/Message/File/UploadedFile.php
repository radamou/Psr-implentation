<?php

namespace App\Internal\Psr\Http\Message\File;


use App\Internal\Http\Message\StreamInterface;

class UploadedFile implements UploadedFileInterface
{
    private $tmpFilename;

    private $filename;

    private $size;

    private $type;

    private $error;

    /**
     * @inheritDoc
     */
    public function getStream(): StreamInterface
    {
    }

    /**
     * @inheritDoc
     */
    public function moveTo($targetPath)
    {
        // TODO: Implement moveTo() method.
    }

    /**
     * @inheritDoc
     */
    public function getSize(): ?int
    {
        // TODO: Implement getSize() method.
    }

    /**
     * @inheritDoc
     */
    public function getError(): int
    {
        // TODO: Implement getError() method.
    }

    /**
     * @inheritDoc
     */
    public function getClientFilename(): ?string
    {
        // TODO: Implement getClientFilename() method.
    }

    /**
     * @inheritDoc
     */
    public function getClientMediaType(): ?string
    {
        // TODO: Implement getClientMediaType() method.
    }


}