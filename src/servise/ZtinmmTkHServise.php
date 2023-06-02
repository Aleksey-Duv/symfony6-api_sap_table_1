<?php
declare(strict_types=1);
namespace App\servise;

use App\Entity\ZtinmmTkH;
use App\Model\ZtinmmTkHListItem;
use App\Model\ZtinmmTkHListResponse;
use App\Repository\ZtinmmTkHRepository;
use Doctrine\Common\Collections\Criteria;

class ZtinmmTkHServise
{
    private function __construct(private ZtinmmTkHRepository $tkHRepository)
    {
    }

    public function getZtinmmTkH(): ZtinmmTkHListResponse
    {
        $item = 'ee';

//      $proc =   $this->tkHRepository->findBy( [], ['konkurs_nr' => Criteria::ASC] );
//
//      $item = array_map(
//          fn(ZtinmmTkH $tkh) => new ZtinmmTkHListItem(
//              $tkh->getKonkursId(), $tkh->getKonkursNr(), $tkh->getKonkursName(), $tkh->getBukrsID()
//          ),
//          $proc
//      );

      return new ZtinmmTkHListResponse($item);
    }


}