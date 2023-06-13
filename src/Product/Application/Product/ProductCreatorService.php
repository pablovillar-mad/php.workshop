<?php

namespace App\Product\Application\Product;

use App\Product\Application\CreatorInterface;
use App\Product\Domain\Product\Product;

class ProductCreatorService implements CreatorInterface
{
    public function create(
        string $name,
        string $email,
        string $color,
        string $type
    ): Product
    {
        return new Product(
            $this->calculateId(),
            $name,
            $email,
            $color,
            $type,
            true
        );

    }

    private function calculateId(): int
    {
        return rand(1, 10000);
    }
}