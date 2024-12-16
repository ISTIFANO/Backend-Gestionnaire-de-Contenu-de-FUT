<?php 

$ArrInfo = [array("name"=>"aamir","email"=>"user@gmail.com","password"=>21288121),
array("name"=>"aamir","email"=>"user1@gmail.com","password"=>21212121),
array("name"=>"aamir","email"=>"user2@gmail.com","password"=>0012121)];


// $Arr2=array();

// array_push($Arr2,$ArrInfo);
// print_r($Arr2);     
// print_r($ArrInfo);

function getinfo($pass,$email){

    global $ArrInfo;
 foreach($ArrInfo as $value){

    if($pass==$value["password"] && $email==$value["email"]){

  echo '<p>your email</p>'.$value["email"].'<p>is valide</p><br>';
  echo '<p>your password'.$value["password"].'<p>is valide</p><br>';
  


}
   
 }
}
getinfo(0012121,"user2@gmail.com");
?>