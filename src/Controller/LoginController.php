<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login/{id}", name="login")
     */
    public function login($id)
    {
        echo "hola => ".$id;

        die();
    }

    
}
