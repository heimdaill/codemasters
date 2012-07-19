<?php

namespace Codemasters\Bundle\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CodemastersJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
