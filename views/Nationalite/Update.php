<?php 

include('../connexion.php');

$id = $_GET["id"];
$name = $_GET['name'];
$flag = $_GET['flag'];

// Use prepared statements to avoid SQL injection
$stmt = $conn->prepare("UPDATE   SET name = ?, flag = ? WHERE id = ?");
$stmt->bind_param("ssi", $name, $flag, $id);

if ($stmt->execute()) {
    echo "succ";
} else {
    echo "error";
}

$stmt->close();

 require_once('./Nationalite.php');

?>
