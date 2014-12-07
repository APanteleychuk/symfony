<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {


    public function indexAction()
    {
        return $this->render('AcmeMyBundle:Default:index.html.twig');
    }



    public function add_goodsAction()
    {
        return $this->render('AcmeMyBundle:Default:add_goods.html.twig');
    }

    public function goodsAction()
    {
        return $this->render('AcmeMyBundle:Default:goods.html.twig');
    }


}