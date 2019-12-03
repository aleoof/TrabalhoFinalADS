<?php
/**
 * Controller padrão do Usuario
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 */

namespace App\Controller;


class Produtos extends \Core\Classes\Controller
{
    public function index()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        $p = new \App\Model\Produtos;
        \Core\Classes\View::show( 'produtos.html', [
                'products' => $p->get()
            ]);
    }

    function form()
    {
        $type = $_GET['type'];
        $data = [];
        $data['type'] = $type;
        switch ($type) {
            case 'alterar':
                $id = $_GET['id'];
                $u = new \App\Model\Produtos;
                $data['prduct'] = $u->get($id);
            break;
        }
        \Core\Classes\View::show( 'insert-products.html', $data);
    }
    public function receivePost(){
        $type = $_GET['type'];
        $data = [];
        switch ($type){
            case 'incluir':
                $p = new \App\Model\Produtos;
                $p->setName($this->post['nome']);
                $p->setDescription($this->post['descricao']);
                $p->setQuatity($this->post['quantidade']);
                $p->insert();
            break;
            case 'alterar':
                $p = new \App\Model\Produtos;
                $p->setName($this->post['nome']);
                $p->setDescription($this->post['descricao']);
                $p->setQuatity($this->post['quantidade']);
                $p->update($this->post['id']);
            break;
            case 'deletar':
                $p = new \App\Model\Produtos;
                $p->delete($_GET['id']);
            break;
        }
        $this->index();
    }

}