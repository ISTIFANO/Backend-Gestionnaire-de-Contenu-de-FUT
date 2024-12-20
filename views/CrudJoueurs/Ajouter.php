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

  
    $query = "
    INSERT INTO Players (name, rating, position_player, photo, id_nationality, id_club)
    VALUES (?, ?, ?, ?, ?, ?)
    ";
    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param($stmt, "ssssii", $playerName, $rating, $playerPosition, $photoPlayer, $nationalitiesPlayer, $clubName);
        if (mysqli_stmt_execute($stmt)) {
            echo "succ";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error sur requet";
    }
} else {
    echo "error Form ";
}


header('Location: ../Joueurs/Jouoeurs.php');
?>
