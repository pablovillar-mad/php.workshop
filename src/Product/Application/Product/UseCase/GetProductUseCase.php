<?php

namespace App\Product\Application\Product\UseCase;

use App\Product\Application\Product\Exception\ProductNotExistsException;
use App\Product\Domain\Product\Product;
use App\Product\Domain\Product\ProductRepositoryInterface;

class GetProductUseCase
{
    public function __construct(
        private ProductRepositoryInterface $productRepository
    ) {
    }

    public function execute(string $productId): Product
    {
        $product = $this->productRepository->read($productId);
        if (is_null($product)) {
            throw new ProductNotExistsException($productId, 'Product not found');
        }
        return $product;
    }
}