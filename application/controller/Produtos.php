<?php
/**
 * Controller padrão do Usuario
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 */

namespace App\Controller;


class Produtos extends \Core\Classes\Controller
{
    public function index(){
        \Core\Classes\View::show('produtos.php');
            $this->getProducts();
    }

    public function getProducts(){
        $products = new \App\Model\Produtos;
        debug($products->get());
    }

    public function insertProducts()
    {
        $products = new \App\Model\Produtos;
        $products->nome = 'teste';
        $products->descricao = 'teste';
        $products->quantidade = 'teste';
        debug($products->insert());
    }

    public function updateProducts()
    {
        $products = new \App\Model\Produtos;
        $products->nome = 'teste2';
        $products->descricao = 'teste2';
        $products->quantidade = 'teste2';
        debug($products->update(3));
    }

    public function deleteProducts()
    {
        $products = new \App\Model\Produtos;
        debug($products->delete(3));
    }

}