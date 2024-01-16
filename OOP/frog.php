<?php

require_once "animal.php";
class Frog extends Animal 
{
    public function getFrogName()
    {
        echo "<br/><br/>Name : Buduk";
    }

    public function getFrogLegs()
    {
        echo "<br/>Legs : 4";
    }

    public function getFrogBlood()
    {
        echo "<br/>Cold Blooded : no";
    }

    public function getFrogJump()
    {
        echo  "<br/> Jump : Wakakak";
    }
}

?>