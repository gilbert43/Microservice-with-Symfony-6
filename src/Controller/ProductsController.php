<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{

    #[Route('/products/{id}/lowest-price', name:'lowest-price', methods:'POST')]
    public function lowestPrice(Request $request,int $id): Response
    {
        if($request->headers->has('force-fail')){
            returnJsonResponse([
                'error' => 'Promotions-engine failure message'
            ], $request->headers->get('force-fail'));
        }

        return JsonResponse([
            'quantity'=>5
        ]);
    }

    #[Route('/products/{id}/promotions', name:'promotions', methods:'GET')]
    public function promotions()
    {

    }
}
