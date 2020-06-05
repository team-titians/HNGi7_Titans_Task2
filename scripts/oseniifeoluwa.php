<?php
$firstName = "Ifeoluwa";
$lastName = "Oseni";
$middleName = "Daniel";
$myID = "HNG-00107";
$myEmail = "ifeoseni@gmail.com";
$language = "PHP";
$name = strtoupper($lastName). " ". $firstName." ". $middleName;

$statement = array("Hello World, this is",$name,"with HNGi7 ID",$myID,"and email",$myEmail,"using",$language,"for stage 2 task.");
foreach ($statement as $value) {
    if($value == "for stage 2 task."){
        echo $value;
    }else{
        echo $value." ";
    }
    
}

?>
