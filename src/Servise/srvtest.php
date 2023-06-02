<?php

namespace App\Servise;

use App\Entity\User;
use App\Entity\ZtinmmTkH;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class srvtest
{
    public function __construct()
    {
    }

    public function gettdat(): JsonResponse
    {

            $data[] = [
                'konkurs_id' => 1,
                'email' => 'test return',


            ];

        $response = new JsonResponse($data);

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}