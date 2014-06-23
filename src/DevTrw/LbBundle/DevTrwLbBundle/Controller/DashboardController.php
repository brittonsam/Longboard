<?php

namespace DevTrw\LbBundle\DevTrwLbBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
    {
        public function indexAction()
        {
            return $this->render('DevTrwLbBundle:Dashboard:dashboard.html.twig');
                        //return new Response('<html><body>Hello '.$name.'!</body></html>');
        }
    }