<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {


    public function indexAction()
    {
        return $this->render('AcmeMyBundle:Default:index.html.twig', array(
                'test' =>'hello world!!!',
                'number' => '5',
                'html' => '<h1>Autoescape</h1>',
                'email'=> 'alexey.panteleychuk@gmail.com'
            )
        );
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