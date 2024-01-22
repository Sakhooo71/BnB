<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\request;

class FavoriteController extends AbstractController
{
    #[Route('/check_favorite', name: 'check_favorite')]
    public function index(
        EntityManagerInterface $em,
        FavoriteRepository $favoriteRepository,
        request $request
    ): Response
    {
        if (!$this->getUser()) {
            return $this->reDirect
        }
        // Get the form call
        // Check if the favorite already exists
        // Persist changes
        // Flash message to confirm the action
        // Redirect to the room page after checking the favorite
        return $this->redirectToRoute('rooms');
    }
}
