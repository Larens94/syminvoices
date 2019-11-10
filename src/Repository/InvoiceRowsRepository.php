<?php

namespace App\Repository;

use App\Entity\InvoiceRows;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InvoiceRows|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvoiceRows|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvoiceRows[]    findAll()
 * @method InvoiceRows[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceRowsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvoiceRows::class);
    }

    // /**
    //  * @return InvoiceRows[] Returns an array of InvoiceRows objects
    //  */
    public function findByInvoIceId($id)
    {
        
        return $this->createQueryBuilder('i')
            ->andWhere('i.invoice_id = :val')
            ->setParameter('val', $id)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
    public function getTotalRows($id)
    {
        $entityManager = $this->getEntityManager();
    
        return $entityManager->createQuery(
            'SELECT i, sum(i.amount+i.amountIva) as TOTALE_ROWS_WITH_IVA,sum(i.amountIva) as TOTALE_ROWS_IVA FROM App\Entity\invoiceRows i  WHERE i.invoice_id = :id'
        )->setParameter('id', $id)
        ->getResult();
    }
   

 
}
