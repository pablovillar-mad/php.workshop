<?php

namespace App\Product\Application\Product\UseCase;

use App\Product\Domain\Product\Product;
use App\Product\Domain\Product\ProductRepositoryInterface;

class CreateProductUseCase
{
    public function __construct(
        private ProductRepositoryInterface $productRepository
    ) {
    }

    public function execute(
        int $id, string $name, string $email, string $color, string $type, bool $isActive
    ): void
    {
        $product = new Product(
            $id,
            $name,
            $email,
            $color,
            $type,
            $isActive
        );
        $this->productRepository->create($product);

    }
}