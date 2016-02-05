<?php

namespace SfWebApp\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




//class DefaultController extends Controller
//{
//    /**
//     *@Route("/hello/{name}")
//     *@Template
//     */
//
//    public function indexAction($name)
//    {
//        return $this->render('SfWebAppMainBundle:Default:index.html.twig', array('name' => $name));
//    }
//}

class DefaultController extends Controller
{
    /**
     *@Route("/hello/")
     *@Template
     */


    public function indexAction()
    {
        return $this->render('SfWebAppMainBundle:Default:index.html.twig');
    }
}
