<?php

namespace App\Controller;

use App\Entity\ZtinmmTkH;
use App\Servise\srvtest;
use App\Servise\ZtinmmTkHServise;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ZtinmmTkHController extends AbstractController
{
    public function __construct(private readonly ZtinmmTkHServise $tkhServise)
    {

    }

    #[Route('/ztintkh', name: 'app_ztinmm_tk_h')]
    public function index(): JsonResponse
    {


     //   return $srvtest->gettdat();
         return $this->json( $this->tkhServise->getZtinmmTkH());

    }
}
