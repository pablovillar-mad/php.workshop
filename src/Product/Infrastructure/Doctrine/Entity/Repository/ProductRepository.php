<?php

namespace App\Product\Infrastructure\Doctrine\Entity\Repository;

use App\Chat\Domain\ChatProvider\ChatProvider;
use App\Product\Domain\Product\Product;
use App\Product\Domain\Product\ProductRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository implements ProductRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function read(string $id): ?Product
    {
        return $this->findOneBy(['id' => $id]);;
    }

    public function create(Product $product): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($product);
        $entityManager->flush();
    }
}