<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Repository\LibroRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/', name: 'app_poema')]
class LibroController extends AbstractController
{
      
        
        #[Route('/newLibro', name:'insertLibro')]
        public function insertPoema(Request $request, LibroRepository $repository): Response
        {
          if (count($request->request->all())){
    
            $repository->insert($request);
          }
    
          return $this->render('libro/index.html.twig', []);
        
        }
    
}



