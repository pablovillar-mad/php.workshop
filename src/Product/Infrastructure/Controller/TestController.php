<?php

namespace App\Product\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TestController extends AbstractController
{
    public function exercise(Request $request): JsonResponse
    {
        return new JsonResponse(['message' => 'Hello World!']);
    }

}