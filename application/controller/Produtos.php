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
        $products= $this->getProducts();
        
        //debug($data);
        \Core\Classes\View::show( 'produtos.html', array('products' => $products) );
                // if($id){
                //     $delete = $this->deleteProducts($id);
                // }
    }

    public function getProducts(){
        $products = new \App\Model\Produtos;
        return $products->get();
        
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
        // $products->nome = 'teste2';
        // $products->descricao = 'teste2';
        // $products->quantidade = 'teste2';
        debug($products->update());
        header('Location: index');
    }

    public function deleteProducts()
    {
        $id = $_GET["id"];
        $products = new \App\Model\Produtos;
        $products->delete($id); 
        header('Location: index');
    }

}