<?php
/**
 * Created by PhpStorm.
 * User: kevin.kinanga
 * Date: 26/09/2018
 * Time: 10:44
 */

namespace Models;


class nosModels
{
    public static function accueilDatas(){
        //return a table with datas for accueil
        return ['title'=>'Notre page d\'accueil',
            'h1'=>'Bienvenue',
            'h2'=>'sur notre site',
            'content' => ["premier paragraphe","Deuxieme paragraphe","Paragraphe final"]

        ];
    }
    public static function formDatas()
    {
        return ['content' => '<form action="" name="lui" method="post"><input name="themail" type="email" placeholder="Votre mail" required><br/><textarea name="thetext" placeholder="Votre message" required></textarea><br><input type="submit" value="Envoyer"></form> '];
    }

    public static function envoieMail(Array $datas){
        $themail = filter_var($_POST['themail'], FILTER_VALIDATE_EMAIL);
        $thetext = htmlentities(strip_tags($_POST['thetext']),ENT_QUOTES);
        $aqui = "kevinkinanga41@gmail.com";
        if(@mail($aqui,"test de notre site",$thetext,'From: '.$aqui . "\r\n" .
            'Reply-To: ' .$aqui. "\r\n" .
            'X-Mailer: PHP/' . phpversion())){
            return true;
        }else{
            return false;
        }
    }
}