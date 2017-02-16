<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render("base.html.twig");
    }
    
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Admin page!</body></html>');
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {
        
    }
    
    /**
     * @Route("/login", name="login")
     */
    public function login() {
        
        return $this->render('login/login.html.twig');
    }
    /**
     * @Route("/loginCheck", name="loginCheck")
     */
    public function loginCheck() {
        
    }
}