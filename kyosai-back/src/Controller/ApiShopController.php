<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Retrieves the various product information from the database
 * @author Michael BECQUER
 */
class ApiShopController extends AbstractController
{

    // /**
    //  * Retrieves products from the database
    //  *
    //  * @param  mixed $produitsRepository
    //  * @return response
    //  */
    /**
     * @Route("/shop", name="shop_index", methods={"GET"})
     */
    public function index(ProduitsRepository $produitsRepository): response
    {
        return $this->json($produitsRepository->findAll(), 200, []);
    }


    // /**
    //  * Retrieves the list of product categories
    //  *
    //  * @param  mixed $categoryRepository
    //  * @return response
    //  */
    /**
     * @Route("/category/list", name="category_list", methods={"GET"})
     */
    public function categoryList(CategoryRepository $categoryRepository): response
    {
        return $this->json($categoryRepository->findAll(), 200, []);
    }
}
