<?php

namespace GestionLpiBundle\Repository;

use Doctrine\ORM\EntityRepository;
use GestionLpiBundle\Entity\Absence;
use Symfony\Component\Validator\Constraints\Count;

/**
 * AbsenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AbsenceRepository extends EntityRepository
{
    public function absenceCount()
    {
        $query = $this->getEntityManager()->getRepository('GestionLpiBundle:Absence')
            ->createQueryBuilder('a')
            ->select('e.nom,COUNT(e) countABS')
            ->join('a.etudiant','e')->groupBy('e')->orderBy('countABS','DESC')->setMaxResults(5)->getQuery()->getResult();

    return $query;
    }
    public function absenceHouresCount()
    {
        $query = $this->getEntityManager()->getRepository('GestionLpiBundle:Absence')
            ->createQueryBuilder('a')
            ->select('e.nom')
            ->addSelect('SUM(a.nombreHeurs) sumABS')
            ->join('a.etudiant','e')->groupBy('e')->orderBy('sumABS','DESC')->getQuery()->getResult();



        return $query;
    }
}