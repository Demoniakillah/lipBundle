<?php

namespace Lip\AutoAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LipAdminBundle:Default:index.html.twig');
    }
}
