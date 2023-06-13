<?php

namespace App\Product\Domain\Product;

class Estanteria extends Product implements \JsonSerializable
{
    public function __construct(int $id, string $name, string $email, string $color, string $type, bool $isActive)
    {
        parent::__construct($id, $name, $email, $color, $type, $isActive);
    }
}