<?php

namespace Jazzyweb\AcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JwAcmeBundle:Default:index.html.twig', array('name' => $name));
    }
}
