<?php 

include('../connexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $flag = $_POST['flag'];
    $stmt = $conn->prepare("INSERT INTO Nationalities (name, flag) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $flag); 
    if ($stmt->execute()) {
        echo "succ";
    } else {
        echo "error";
    }
    $stmt->close();
} 

require_once('./Nationalite.php');


?>