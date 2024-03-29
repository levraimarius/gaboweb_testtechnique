<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route(path="/", name="homepage", methods={"GET", "POST"})
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->redirectToRoute('app_login');
    }
}
