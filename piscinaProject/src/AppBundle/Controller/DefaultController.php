<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function mainAction(){

        return $this->render('mainPage.html.twig');

    }

    public function transaccionAction(){

        $bool=true;

        while($bool){

        }

    }

    public function introduccionAction(){

        $introduccion= array(
            "intro"=>"Estas instalaciones funcionan con energia solar");

        return $this->render('AppBundle:default:introduccion.html.twig', array(
            'introduccion'=>$introduccion,
        ));

    }

    public function descripcionAction(){

        return $this->render('AppBundle:default:descripcion.html.twig');

    }

    public function ahorroAcumuladoAction(){

        return $this->render('AppBundle:default:ahorroAcumulado.html.twig');

    }

    public function ahorroDiarioAction(){

        return $this->render('AppBundle:default:ahorroDiario.html.twig');

    }

    public function benMedioambientalesAction(){

        return $this->render('AppBundle:default:benMedioambientales.html.twig');

    }

    public function publicidadAction(){

        return $this->render('AppBundle:default:publicidad.html.twig');

    }



}
