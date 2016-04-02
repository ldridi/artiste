<?php

namespace Artiste\ArtisteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArtisteBundle:Default:index.html.twig');
    }
}
