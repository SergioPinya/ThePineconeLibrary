<?php

namespace App\Controller;

use App\Entity\Noticias;
use App\Repository\PoemaRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/', name: 'app_poema')]
class PoemaController extends AbstractController
{
 
    
      
        
        #[Route('/newPoe', name:'insertPoema')]
        public function insertPoema(Request $request, PoemaRepository $repository): Response
        {
          if (count($request->request->all())){
    
            $repository->insert($request);
          }
    
          return $this->render('poema/index.html.twig', []);
        
    }

   
    /* 
} 




#[Route('/twig')]
class PoemaController extends AbstractController
{
  

    #[Route('/insertNews', name: 'insert_news')]
    public function insertNews(Request $request, PoemaRepository $repository): Response
    {
      if (count($request->request->all())){

        $repository->insert($request);
      }

      return $this->render('news/insertNews.html.twig', []);
    }

 

  

 */  
  private function getLastPage($page, $session): int
    {
      if ($page != null) {
        $session->set("page",$page);
        return $page;
      } elseif (!$session->has("page") || !is_numeric($session->get("page"))) {
        $session->set("page",1);
        return 1;
      }
      return $session->get("page");
    } 
}



