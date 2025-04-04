<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class PytaniaController extends AbstractController
{
    #[Route('/Pytania')]
    public function galeria():Response
    {
        return $this->render('pytania.html.twig');
    }

}