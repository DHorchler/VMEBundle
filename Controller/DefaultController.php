<?php

namespace DHorchler\VMEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/vme", name="vme")
     */
    public function indexAction()
    {
        return $this->render('DHorchlerVMEBundle:Default:index.html.twig');
    }
}
