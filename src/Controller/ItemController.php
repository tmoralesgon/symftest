<?php
namespace App\Controller;

use App\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends AbstractController
{
    public function show(EntityManagerInterface $em): Response
    {
        $allItems = $em->getRepository(Item::class)->findAll();
        $message="";
        if (count($allItems)<1) {
            /*throw $this->createNotFoundException(
                'No items found'
            );*/
            $message="No items found";
        }

        return $this->render('item/items.html.twig', ['items' => $allItems, 'message' => $message]);
    }
}