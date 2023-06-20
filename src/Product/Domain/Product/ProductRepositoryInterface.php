<?php

namespace App\Product\Domain\Product;

interface ProductRepositoryInterface
{
    public function read(string $id): ?Product;

    public function create(Product $product): void;

}