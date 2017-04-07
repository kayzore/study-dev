<?php

namespace Kay\Bundle\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KayPlatformBundle:Default:index.html.twig');
    }
}
