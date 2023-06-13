<?php

namespace App\Product\Infrastructure\Controller;

use App\Product\Application\CreatorInterface;
use App\Product\Application\Product\ProductCreatorService;
use App\Product\Domain\Product\Estanteria;
use App\Product\Domain\Product\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use function PHPUnit\Framework\isInstanceOf;

class TestController extends AbstractController
{

    public function __construct(private CreatorInterface $productCreatorService)
    {
    }

    public function exercise(Request $request): JsonResponse
    {
        $estanteria = $this->productCreatorService->create(
            'estantería',
            'estanteriapaco@estanterias.com',
            'negro',
            'mueble'
        );
        $estanteria->setEmail('estanteriaedu@estanterias.com');
        $isEstanteria = $estanteria instanceOf Product;

        $estanteria2 = new Estanteria(
            4,
            'estantería2',
            'estanteriapaco2@estanterias.com',
            'blanco',
            'mueble',
            true
        );
        $isEstanteria2 = $estanteria2 instanceOf Product;
        return new JsonResponse(['message' => $estanteria]);
    }

}