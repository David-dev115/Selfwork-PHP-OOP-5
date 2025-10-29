<?php

// Ondemand PHP
// Selfwork PHP OOP 5
// Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
// Category
// -- Attualita'
// -- Sport
// -- Gossip
// -- Storia

// Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.



abstract class Category{
    abstract public function getMyCategory();
}

class Attualita extends Category{

    public function getMyCategory(){
        echo "Sezione dedicata all'Attualità\n";
    }

}

class Sport extends Category{

    public function getMyCategory(){
        echo "Sezione dedicata allo Sport\n";
    }

}

class Gossip extends Category{

    public function getMyCategory(){
        echo "Sezione dedicata al Gossip\n";
    }

}

class Storia extends Category{

    public function getMyCategory(){
        echo "Sezione dedicata alla Storia\n";
    }

}

class Documentario {

    public $category;

    public function __construct(Category $_category){
        $this->category = $_category;
    }

    public function category(){
        $this->category->getMyCategory();
    }
}


$controCampo = new Documentario (new Sport);
// print_r($controCampo);
$controCampo->category();
