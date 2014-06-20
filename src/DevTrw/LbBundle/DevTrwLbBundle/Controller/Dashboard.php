<?php

namespace DevTrw\LbBundle\DevTrwLbBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class Dashboard extends Controller

    public function index()
    {
        return $this->render('DevTrwBundle:Dashboard:index')
    }