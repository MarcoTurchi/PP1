<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProductos(ProductoRepository $productoRepository): Response
    {
        // 1.b. Invoca al método findAll() tal como indica el diagrama de secuencia
        $productos = $productoRepository->findAll();

        // 1.c. Pasa los productos como parámetro a la vista
        return $this->render('producto/lista.html.twig', [
            'productos' => $productos,
        ]);
    }
}