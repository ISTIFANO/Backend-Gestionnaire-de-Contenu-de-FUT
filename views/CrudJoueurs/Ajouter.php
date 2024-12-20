<?php
include('../connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $playerName = $_POST['PlayerName'];
    $playerPosition = $_POST['PlayerPosition'];
    $rating = $_POST['Rating'];
    $photoPlayer = $_POST['PhotoPlayer'];
    $nationalitiesPlayer = $_POST['NationalitiesPlayer'];
    $logoPlayer = $_POST['LogoPlayer'];
    $clubName = $_POST['ClubName'];
    $flag = $_POST['Flag'];
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
//    echo   $idCounter;
}
  
// $query = "INSERT INTO Players (name, rating, position_player, photo, id_nationality, id_club, id_detail_player)
// VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// if ($stmt = mysqli_prepare($conn, $query)) {
//     mysqli_stmt_bind_param($stmt, "sissiiis", );

//     if (mysqli_stmt_execute($stmt)) {
//         echo "Success";
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }

//     mysqli_stmt_close($stmt);
// } else {
//     echo "Error in query preparation";
// }
$query="INSERT INTO Players (name, rating, position_player, photo, id_nationality, id_club, id_detail_player) VALUES ('$playerName', $rating,'$playerPosition', '$photoPlayer','$nationalitiesPlayer', '$clubName', $idCounter)";

if ($stmt = mysqli_query($conn, $query)) {


            echo "Success";
      } else {
             echo "Error: " . mysqli_error($conn);
        }
// require_once('../CrudJoueurs/Joueurs.php');

// header('Location: ../Joueurs/Jouoeurs.php');
?>
