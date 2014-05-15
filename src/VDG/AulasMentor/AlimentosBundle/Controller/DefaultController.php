<?php

namespace VDG\AulasMentor\AlimentosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use VDG\AulasMentor\AlimentosBundle\Config;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $params = array(
            'mensaje' => 'Bienvenido al curso de Symfony',
            'fecha' => date('d-m-Y')
        );
        return $this->render('VDGAulasMentorAlimentosBundle:Default:index.html.twig', $params);
    }

    public function listarAction()
    {
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        
        $params = array(
            'alimentos' => $m->dameAlimentos(),
        );
        return $this->render('VDGAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig', $params);
    }
    
    public function insertarAction(){
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $params = array('nombre'=>'', 'energia'=>'', 'proteina'=>'', 'hc'=>'', 'fibra'=>'', 'grasa'=>'',);
        if ($SERVER['REQUEST_METHOD'] == 'POST'){
            // comprobamos los campos del formulario
            if ($m->insertarAlimento($_POST['nombre'], $_POST['proteina'], $_POST['hc'], $_POST['fibra'], $_POST['grasa'])){
                $params['mensaje'] = 'Alimento insertado correctamente.';
            } else {
                $params = array(
                    'nombre'=>$_POST['nombre'],
                    'proteina'=>$_POST['proteina'],
                    'hc'=>$_POST['hc'],
                    'fibra'=>$_POST['fibra'],
                    'grasa'=>$_POST['grasa'],
                );
                $params['mensaje'] = 'No se ha podido guardar el alimento, revisa el formulario.';
            }
        }
        return $this->render('VDGAulasMentorAlimentosBundle:Default:formInsertar.html.twig', $params);
    }

    public function buscarPorNombreAction(){
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $params = array('nombre'=>'', 'resultado'=>array(),);
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $params['nombre'] = $_POST['nombre'];
            $params['resultado'] = $m->buscarPorNombre($_POST['nombre']);
        }
        return $this->render('VDGAulasMentorAlimentosBundle:Default:buscarAlimentos.html.twig', $params);
    }
    
    public function verAction($id){
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        
        $alimento = $m->dameAlimento($id);
        if(!$alimento){
            throw new AccessDeniedHttpException();
        }
        $params = $alimento;

        return $this->render('VDGAulasMentorAlimentosBundle:Default:verAlimento.html.twig', $params);
    }

}
