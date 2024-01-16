<?php

require_once "animal.php";
class Ape extends Animal 
{
    public function getApeName()
    {
        echo "<br/><br/>name : goku";
    }

    public function getApeLegs()
    {
        echo "<br/> Legs : 2";
    }

    public function getApeBlood()
    {
        echo "<br/> Cold Blooded : no";
    }

    public function getApeYell()
    {
        return "auoauo";
    }
}

?>