<?php

namespace App\Controller;


use App\Entity\Poema;

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
            "titulo" => $getPoema->gettitulo(),
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
                "titulo" => $getPoema->gettitulo(),
                "imagen" => $getPoema->getImagen(),
                "texto" => $getPoema->getTexto()
            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    }
}
