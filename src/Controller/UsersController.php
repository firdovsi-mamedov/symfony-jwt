<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class UsersController extends AbstractController
{
    #[Route('/users', name: 'users')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findOneBy(['id' => 1]);
        return new JsonResponse([
            'name' => $user->getEmail()
        ]);
    }
}
