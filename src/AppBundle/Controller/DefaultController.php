<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('AppBundle:Pages:home.html.twig');
    }
    public function painAction()
    {
        return $this->render('AppBundle:Pages:pain_point.html.twig');
    }
    public function moreInfoAction()
    {
        return $this->render('AppBundle:Pages:more_info.html.twig');
    }
    public function resultsAction()
    {
        return $this->render('AppBundle:Pages:results.html.twig');
    }
}
