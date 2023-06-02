<?php

namespace App\Controller;


use App\Repository\ZtinmmTkHRepository;
use App\Servise\srvtest;
use App\Servise\ZtinmmTkHServise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ZtinmmTkHController extends AbstractController
{
    public function __construct(private readonly ZtinmmTkHServise $tkhServise)
    {
    }

    #[Route('/ztintkh', name: 'app_ztinmm_tk_h', methods: ['GET'])]
    public function index(srvtest $srvtest, ZtinmmTkHRepository $tkHRepository): JsonResponse
    {

        $proc = $tkHRepository->findAllSortedByKonkurs();
//dd($proc);
        return $srvtest->gettdat();
        //  return $this->json( $this->tkhServise->getZtinmmTkH());

    }
}
