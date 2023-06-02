<?php

namespace App\Servise;

use App\Entity\ZtinmmTkH;
use App\Model\ZtinmmTkHListItem;
use App\Model\ZtinmmTkHListResponse;
use App\Repository\ZtinmmTkHRepository;
use Doctrine\Common\Collections\Criteria;

class ZtinmmTkHServise
{
    private function __construct(private readonly ZtinmmTkHRepository $tkHRepository)
    {
    }

    public function getZtinmmTkH(): ZtinmmTkHListResponse
    {

      $proc =   $this->tkHRepository->findAllSortedByKonkurs();

      $item = array_map(
          fn(ZtinmmTkH $tkh) => new ZtinmmTkHListItem(
              $tkh->getKonkursId(), $tkh->getKonkursNr(), $tkh->getKonkursName()
          ),
          $proc
      );

      return new ZtinmmTkHListResponse($item);
    }


}