<?php

namespace VDG\AulasMentor\EjercicioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VDGAulasMentorEjercicioBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function saludoAction(){
        $salida = '<html><body><h1>Hola caracola!</h1></body></html>';
        return new \Symfony\Component\HttpFoundation\Response($salida);
    }
}
