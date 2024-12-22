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

    $nationalityId = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM Nationalities WHERE id = ?");
    $stmt->bind_param("i", $nationalityId); 

    if ($stmt->execute()) {
        
    } else {
        echo "error";
    }

    $stmt->close();


$conn->close();

require_once('./Nationalite.php');



?>
