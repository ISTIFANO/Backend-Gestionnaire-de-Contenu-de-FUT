<?php
include "../connexion.php";

$idplayers = $_GET['id'];
echo $idplayers;

//     $stmt = $conn->prepare("DELETE FROM Playres WHERE id = ?");
//     $stmt->bind_param("i", $idplayers); 
//     if ($stmt->execute()) {
        
//     } else {
//         echo "error";
//     }

//     $stmt->close();


// $conn->close();

// require_once('./../Joueurs/Joueurs.php');


?>