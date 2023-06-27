<?php

namespace App\Product\Application\Product\Exception;

class ProductNotExistsException extends \Exception
{
    public function __construct(private int $productId, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getProductId(): int
    {
        return $this->productId;
    }
}