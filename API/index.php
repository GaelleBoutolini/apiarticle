<?php
try{
    if (!empty($_GET['demande'])){ //Si je reçois une demande, je fais un traitement spécifique.
        echo "test";

    }else {
        throw new Exception ("Problème de récupération d'articles");// Si ce n'est pas le cas, je vais lever une erreur (une exception) et ce message va s'afficher.
    }
}catch(Exception $e){
        $erreur =[
            "message" => $e->getMessage(),
            "code" => $e->getCode()
        ];
        print_r($erreur);
    }



