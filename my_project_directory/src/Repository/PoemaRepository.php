<?php

namespace App\Repository;

use App\Entity\Poema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Poema>
 *
 * @method Poema|null find($id, $lockMode = null, $lockVersion = null)
 * @method Poema|null findOneBy(array $criteria, array $orderBy = null)
 * @method Poema[]    findAll()
 * @method Poema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoemaRepository extends ServiceEntityRepository
{
    private $doctrine;
    public function __construct(ManagerRegistry $registry)
    {
        $this->doctrine = $registry;
        parent::__construct($registry, Poema::class);
    }

    public function save(Poema $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Poema $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function insert($request): void
    {

        $file = $request->files->get('imagen');
        $extension = "." . $file->getClientOriginalExtension();


        $file->move('assets/img/tmp/', $file . $extension);

        $poema = new Poema;

        $poema
                ->setTitulo($request->request->get('titulo'))
                ->setTexto($request->request->get('texto'))
                ->setImagen($file . $extension);
        $this->doctrine->getManager()->persist($poema);
        $this->doctrine->getManager()->flush();
    }

//    /**
//     * @return Poema[] Returns an array of Poema objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Poema
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
