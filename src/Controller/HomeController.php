<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
    }
    public function formations()
    {
        return $this->render('formations.html.twig');
    }
    
}
