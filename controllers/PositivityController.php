<?php

class PositivityController{

    public function __construct() {

    }

    public function run(){

        $notification="";
        $hapiness="";

        // form handling

        if(!empty($_POST['form_positivity'])){
            $message = $_POST['message'];
            $hapiness = $this->countPositivity($message);
            $notification = "Votre résultat est le suivant:";
        }

        require_once(CHEMIN_VUES . 'positivity.php');
    }

    public function countPositivity($message):string{


        $positivesWords = array("bon","bonne","super","cool","génial","géniale","parfait","parfaite",
            "incroyable","excellent","excellente");

        $arrayUser = explode(' ',$message);

        $nbrPositif=0;

        for($i=0;$i<sizeof($arrayUser);$i++){
            for($j=0;$j < sizeof($positivesWords);$j++) {
                if($arrayUser[$i]===$positivesWords[$j])
                    $nbrPositif++;
            }
        }

        switch ($nbrPositif){
            case 0:
                return "neutre";
                break;
            case 1:
                return "correct";
                break;
            case 2:
                return "correct";
                break;
            case 3:
                return "bon";
                break;
            case 4:
                return "bon";
                break;
            case 5:
                return "très bon";
                break;
            case 6:
                return "franchement positif";
                break;
            case 7:
                return "franchement positif";
                break;
            case 8:
                return "franchement positif";
                break;
            case 9:
                return "excellent";
                break;
            case 10:
                return "parfait";
                break;
            default:
                return "parfait";
                break;

        }

    }

}