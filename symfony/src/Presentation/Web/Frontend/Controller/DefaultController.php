<?php

namespace App\Presentation\Web\Frontend\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/vue/", name="default_vue")
     */
    public function index()
    {
        return $this->render('@Frontend/app.html.twig');
    }
}
