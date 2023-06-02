<?php

namespace App\Controller;

use App\servise\ZtinmmTkHServise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ZtinmmTkHController extends AbstractController
{
    public function __construct(private ZtinmmTkHServise $tkhServise)
    {

    }

    #[Route('/ztintkh', name: 'app_ztinmm_tk_h')]
    public function index(): JsonResponse
    {
        return $this->json(
            $this->tkhServise->getZtinmmTkH()
        );
    }
}
