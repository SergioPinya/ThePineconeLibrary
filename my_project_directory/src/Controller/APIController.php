<?php





namespace App\Controller;


use App\Entity\Poema;
use App\Entity\Libro;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


    #[Route('/api')]
class APIController extends AbstractController
{
    #[Route('/Poema/{id}', name: 'getPoema_api', methods: ["GET"])]
    public function getPoema(ManagerRegistry $doctrine, $id): JsonResponse
    {
        $getPoema = $doctrine->getRepository(Poema::class)->find($id);
        $data = [
            "titulo" => $getPoema->getTitulo(),
            "imagen" => $getPoema->getImagen(),
            "texto" => $getPoema->getTexto()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    } 

     #[Route('/Poema', name: 'getAllPoema_api', methods: ["GET"])]
    public function getAllPoema(ManagerRegistry $doctrine): JsonResponse
    {
        $getAllPoema = $doctrine->getRepository(Poema::class)->findAll();
        foreach ($getAllPoema as $getPoema) {
            $data[] = [
                "titulo" => $getPoema->getTitulo(),
                "imagen" => $getPoema->getImagen(),
                "texto" => $getPoema->getTexto()
            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    } 


    #[Route('/Libro/{id}', name: 'getLibro_api', methods: ["GET"])]
    public function getLibro(ManagerRegistry $doctrine, $id): JsonResponse
    {
        $getLibro = $doctrine->getRepository(Libro::class)->find($id);
        $data = [
            "titol" => $getLibro->getTitol(),
            "imagen" => $getLibro->getImagen(),
            "descripcion" => $getLibro->getDescripcion(),
            "contenido" => $getLibro->getContenido()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    } 

     #[Route('/Libro', name: 'getAllLibro_api', methods: ["GET"])]
    public function getAllLibro(ManagerRegistry $doctrine): JsonResponse
    {
        $getAllLibro = $doctrine->getRepository(Libro::class)->findAll();
        foreach ($getAllLibro as $getLibro) {
            $data[] = [
                "titol" => $getLibro->getTitol(),
                "imagen" => $getLibro->getImagen(),
                "descripcion" => $getLibro->getDescripcion(),
                "contenido" => $getLibro->getContenido()
            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    } 
}
