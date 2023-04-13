<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends AbstractController
{
    public function show(): Response
    {
        $userFirstName = "Tatiana";

        return $this->render('item/items.html.twig', ['user_name' => $userFirstName]);
    }
}