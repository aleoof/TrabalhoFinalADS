<?php

namespace App\Model;

class Produtos extends \Core\Classes\Model
{
    
    protected $table  = "produtos";

    public function setName(String $name)
    {
        $this->nome = ucwords($name);
    }
    
    public function setDescription(String $description)
    {
        $this->descricao = ucwords($description);
    }
    
    public function setQuatity(Int $qtd)
    {
        $this->quantidade = $qtd;
    }

    public function authDb()
    {
        $sql = "SELECT * from " . $this->table ;
        $ret = $this->con->query($sql)->fetch();
        if (empty($ret)) {
            return false;
        } else {            
            \Core\Classes\Security::loginRegister($ret);
            return true;
        }
    }
    
}