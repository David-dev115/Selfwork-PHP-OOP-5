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



abstract class Documentario{
    abstract public function getMyCategory();
}

class Attualita extends Documentario{

    public function getMyCategory(){
        echo "Sezione dedicata all'Attualità\n";
    }

}

class Sport extends Documentario{

    public function getMyCategory(){
        echo "Sezione dedicata allo Sport\n";
    }

}

class Gossip extends Documentario{

    public function getMyCategory(){
        echo "Sezione dedicata al Gossip\n";
    }

}

class Storia extends Documentario{

    public function getMyCategory(){
        echo "Sezione dedicata alla Storia\n";
    }

}

class Category {

    public $category;

    public function __construct(Documentario $_category){
        $this->category = $_category;
    }

    public function category(){
        $this->category->getMyCategory();
    }
}


$controCampo = new Category (new Sport);
// print_r($controCampo);
$controCampo->category();
