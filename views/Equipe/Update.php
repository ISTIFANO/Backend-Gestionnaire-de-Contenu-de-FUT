<?php 

include('../connexion.php');

$id = $_GET["id"];
$name = $_GET['name'];
$logo = $_GET['logo'];

// Use prepared statements to avoid SQL injection
$stmt = $conn->prepare("UPDATE Clubs SET name = ?, logo = ? WHERE id = ?");
$stmt->bind_param("ssi", $name, $logo, $id);

if ($stmt->execute()) {
    echo "succ";
} else {
    echo "error";
}

$stmt->close();

 require_once('./Equipe.php');

?>
