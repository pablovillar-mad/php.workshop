<?php

namespace App\Product\Application;

use App\Product\Domain\Product\Product;

interface CreatorInterface
{
    public function create(
        string $name,
        string $email,
        string $color,
        string $type
    ): Product;
}