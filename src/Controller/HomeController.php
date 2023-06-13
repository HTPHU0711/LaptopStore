<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
<<<<<<< HEAD
    public function index(): Response
    {
        return $this->render('view/content.html.twig');
=======
    public function index(ProductRepository $repo): Response
    {
        $product = $repo->findAll();
        return $this->render('View/content.html.twig',[
            'product'=> $product
        ]);
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
    }
}
