<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$database ="gestionnaire";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";


?>

const count = parseInt(readline());
var inputs = readline().split(' ');

// Initialize a variable to store the result
let result = 0;

for (let i = 0; i < count; i++) {
    const number = parseInt(inputs[i]);

    let res;

    if(input %2==0){

res+=input;

    }else if(input!=0){

      res*=input;
    }
    
}

// Output the result
console.log(res);
