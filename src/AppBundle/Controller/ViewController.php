<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ViewController
 * Ce controlleur retourne les vues
 * @author browne
 */
class ViewController extends Controller {

    /**
     * La methode getYellow prend en paramètre $r qui est de type Request
     * La route correspond à l'URI passée ds la requete HTTP
     * ici l'URI est yellow
     * @Route("/yellow", name="yellow")
     * @return Response correspond à la couleur passée ds l'URI
     */
    
    public function getYellow(Request $r) {
     // getMethod() retourne le type de la request
        // si $r est de type GET
        if ($r->getMethod() == "GET") {
            // On retourne une page web
            return $this->render("couleur/yellow.html.twig");
        } else {
            $response = new Response("Yellow");
            return $response;
        }
    }

    /**
     * @Route("/red", name="red") 
     * @return Response correspond à la couleur passée ds l'URI
     */
    public function getRed(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("couleur/red.html.twig");
        } else {
            $response = new Response("Red");
            return $response;
        }
    }

    /**
     * @Route("/blue", name="blue")
     * @return Response
     */
    public function getBlue(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("couleur/blue.html.twig");
        } else {
            $response = new Response("Blue");
            return $response;
        }
    }

    /**
     * @Route("/Green", name="green")
     * @return Response
     */
    public function getGreen(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("couleur/green.html.twig");
        } else {
            $response = new Response("Green");
            return $response;
        }
    }

}
