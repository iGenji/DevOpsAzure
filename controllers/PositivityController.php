<?php

class PositivityController{

    public function __construct() {

    }

    public function run(){

        $notification="";

        require_once(CHEMIN_VUES . 'positivity.php');
    }

    public function countPositivity($message):string{

        return "Correct";
    }

}