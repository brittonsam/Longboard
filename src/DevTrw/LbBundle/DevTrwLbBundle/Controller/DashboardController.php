<?php

namespace DevTrw\LbBundle\DevTrwLbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
    {
        public function indexAction()
        {
            return $this->render('DevTrwLbBundle:Dashboard:dashboard.html.twig');

        }
    }