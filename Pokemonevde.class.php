<?php

class Pokemonev
{
    public $nom;
    public $type;
    public $faiblesse;
    public $pointdevie;
    public $attaque;

    public function __construct($nom,$type,$faiblesse,$pointdevie,$attaque)

    {

    	$this->nom=$nom;
    	$this->type=$type;
    	$this->faiblesse=$faiblesse;
    	$this->pointdevie=$pointdevie;
    	$this->attaque=$attaque;
    }

}

?>
