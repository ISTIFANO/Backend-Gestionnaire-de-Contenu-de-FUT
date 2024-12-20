<?php
include('../connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $playerName = $_POST['PlayerName'];
    $playerPosition = $_POST['PlayerPosition'];
    $rating = $_POST['Rating'];
    $nationalitiesPlayer = $_POST['NationalitiesPlayer'];
    $logoPlayer = $_POST['LogoPlayer'];
    $clubName = $_POST['ClubName'];
    $pace = $_POST['Pace'];
    $shooting = $_POST['Shooting'];
    $passing = $_POST['Passing'];
    $dribbling = $_POST['Dribbling'];
    $defending = $_POST['Defending'];
    $physical = $_POST['Physical'];
    $query_Count = "
    select  count(*)from  Players 
    ";
    $result = mysqli_query($conn,$query_Count);
    $id = mysqli_fetch_row($result);
   $idCounter= $id[0]+1;
echo   $idCounter;
}
  
$query="INSERT INTO Players (name, rating, position_player, photo, id_nationality, id_club, id_detail_player) VALUES ('$playerName', $rating,'$playerPosition', '$logoPlayer','$nationalitiesPlayer', '$clubName', $idCounter)";

if ($stmt = mysqli_query($conn, $query)) {


            echo "Success";
      } else {
             echo "Error: " . mysqli_error($conn);
        }
require_once('../Joueurs/Joueurs.php');

// header('Location: ../Joueurs/Jouoeurs.php');
?>
