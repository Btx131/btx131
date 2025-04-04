<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class GaleriaController extends AbstractController
{
    #[Route('/Galeria')]
    public function galeria():Response
    {
        return $this->render('galeria.html.twig');
    }

}