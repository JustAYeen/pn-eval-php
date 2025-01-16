<?php
session_start();
require_once('../model/model.php'); ?>

//Récupération du nom d'utilisateur
<?php
 
     $pseudo = htmlspecialchars($_POST["pseudo"]);
 
     if($pseudo == null) {
         $message = "information manquante";
     } else {
         $bdd = new Model();
 
         $event= $bdd->getEvents();
 
     }
 
     if($message != "") {
         header("location: ../view/listView.php??message=$message");
     }
?>

//récupération de la liste des évènements dans la base de données


    <?php
         $event = $bdd('SELECT * FROM events');     
        ?>
     
<?php require_once('../view/listView.php');