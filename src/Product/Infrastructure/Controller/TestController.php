<?php

namespace App\Product\Infrastructure\Controller;

use App\Product\Application\CreatorInterface;
use App\Product\Application\Product\UseCase\CreateProductUseCase;
use App\Product\Application\Product\UseCase\GetProductUseCase;
use App\Product\Domain\Product\Estanteria;
use App\Product\Domain\Product\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TestController extends AbstractController
{

    public function __construct(
        private CreatorInterface $productCreatorService,
        private CreateProductUseCase $createProductUseCase,
        private GetProductUseCase $getProductUseCase
    ) {
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

    public function createProduct(Request $request): JsonResponse
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $color = $request->get('color');
        $type = $request->get('type');
        $isActive = $request->get('isActive');

        $this->createProductUseCase->execute(
            $id,
            $name,
            $email,
            $color,
            $type,
            $isActive
        );

        return new JsonResponse();
    }

    public function getProduct(int $productId): JsonResponse
    {
        $product = $this->getProductUseCase->execute($productId);

        return new JsonResponse($product);
    }
}