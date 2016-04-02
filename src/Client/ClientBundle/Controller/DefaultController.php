<?php

namespace Client\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClientBundle:Default:index.html.twig');
    }

    public function profileAction()
    {
        return $this->render('ClientBundle:Profile:profile.html.twig');
    }
}
