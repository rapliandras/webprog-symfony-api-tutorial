<?php


namespace App\Repository;


use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class LyricRepository extends EntityRepository
{
    public function findOldschool()
    {
        $criteria = new Criteria();
        $criteria->where(Criteria::expr()->lte("year", 1985));

        return $this->matching($criteria)->toArray();
    }

    public function findProgressive()
    {
        $criteria = new Criteria();
        $criteria->where(Criteria::expr()->startsWith("genre", "progressive"));

        return $this->matching($criteria)->toArray();
    }
}