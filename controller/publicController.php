<?php
// name of our namespace
namespace Controller;

use  Models\nosModels as DT;

// class for publicController
class publicController{

    // method for "accueuil"
    public static function welcomeAction($twig){

        // recup datas from model

        $datas = DT::accueilDatas();

        // view accueil whith $datas in an associative array , with key "recup"
       echo $twig->render("accueil.html.twig",["recup"=>$datas]);

    }
    // method for "contact"
    public static function contactAction($twig){
        // pas de formulaire envoyé
        if (!empty($_POST)){
            //envoi de mail
            $bool = DT::envoieMail($_POST);
            // si ca a reussi
            if ($bool){
                header("location: ./");
            }else{
                header("Location: ./?content=contact&erreur=true");
            }
        }else {
            // recup form
            $datas = DT::formDatas();
            echo $twig->render("form.html.twig", ["recup" => $datas]);
        }
    }

}