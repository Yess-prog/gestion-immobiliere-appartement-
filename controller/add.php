<?php
require_once "../model/CRUD_Appartement.php";

require_once "../model/appartement.php";
$crud=new CRUD_Appartement();

include "../view/ajoutAPP.php";
if (isset($_POST["send"])){
    $ref=htmlspecialchars($_POST["ref"]);
    $surf=htmlspecialchars($_POST["surf"]);
    $surfEC=htmlspecialchars($_POST["surfEC"]);
    $loc=htmlspecialchars($_POST["loc"]);
    $prop=htmlspecialchars($_POST["prop"]);
    $nbp=htmlspecialchars($_POST["nbp"]);
    $dom=htmlspecialchars($_POST["dom"]);
    $app=new Appartement($ref,$prop,$loc,$surf,$nbp,$dom,$surfEC);
    $res=$crud->AjouterApp($app);
    if($res){
        header("location:../view/insEff.php");exit;
    }
}