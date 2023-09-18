<?php
try{
    $bdd=new PDO('mysql:host=localhost;dbname=bienvenue;', 'root', '', 
                 array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die("Error " . $e->getMessage());
}
// $nom=$_POST["nom"];
// $prenom=$_POST["prenom"];
// $email=$_POST["email"];
// $commentaire=$_POST["commentaire"];
// $numero=$_POST["numero"];
// $dat=$_POST["dat"];
// $details=$_POST["details"];

// echo "nom: $nom";
// echo "prenom: $prenom";
// echo "email: $email";
// echo "numero: $numero";
// echo "dat: $dat";
// echo "details: $details";

// $req = $bdd->prepare("INSERT INTO formular (nom) 
//                      VALUES(:nom)");
// $req->execute([
//     "nom" => $nom,
//     "prenom" => $prenom,
// ])
// header('Location: about.php');
// 
 ?>