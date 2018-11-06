<?php

namespace App\Presentation\Web\Pub\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/vue/", name="default_vue")
     */
    public function index()
    {
        return $this->render('@Pub/app.html.twig');
    }
}
