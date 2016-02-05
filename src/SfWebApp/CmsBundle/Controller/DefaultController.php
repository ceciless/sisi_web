<?php

namespace SfWebApp\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*class DefaultController extends Controller
{
    public function indexAction($name)
   {
        return $this->render('SfWebAppCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
*/


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SfWebAppCmsBundle:Default:index.html.twig');
    }
}

