<?php

namespace applicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('applicationBundle:Default:index.html.twig');
    }
}
