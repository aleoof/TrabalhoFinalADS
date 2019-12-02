<?php

namespace App\Model;

class Produtos extends \Core\Classes\Model
{
    
    protected $table  = "produtos";

    public function setName(String $name)
    {
        $this->name = ucwords($name);
    }
    
    public function setDescription(String $description)
    {
        $this->description = ucwords($description);
    }
    
    public function setQuatity(Int $qtd)
    {
        $this->qtd = ucwords($qtd);
    }

    public function authDb()
    {
        $sql = "SELECT * from " . $this->table ;
        $ret = $this->con->query($sql)->fetch();

    }
    
}