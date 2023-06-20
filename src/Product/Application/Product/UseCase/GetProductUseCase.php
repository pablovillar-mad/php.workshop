<?php

namespace App\Product\Application\Product\UseCase;

use App\Product\Domain\Product\Product;
use App\Product\Domain\Product\ProductRepositoryInterface;

class GetProductUseCase
{
    public function __construct(
        private ProductRepositoryInterface $productRepository
    ) {
    }

    public function execute(string $productId): ?Product
    {
        return $this->productRepository->read($productId);
    }
}