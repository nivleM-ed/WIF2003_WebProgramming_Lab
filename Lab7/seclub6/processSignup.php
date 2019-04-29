<?php
$uname = $_POST["name"];
$studentID = $_POST["studentid"];
$email = $_POST["email"];
$password = $_POST["password"];
$rpassword = $_POST["repeatpassword"];
$birthday = $_POST["bday"];
$event = $_POST["favevent"];

$myfile = fopen("seclubmember.txt", "w") or die("Unable to open file!");


// $array = [$uname, $studentID, $email, $password, $rpassword, $birthday, $email];
$array = [
    "uname" => $uname, 
    "studentID" => $studentID,
    "email" => $email,
    "password" => $password, 
    "reapeatpassword" => $rpassword,
    "birthday" => $birthday,
    "event" => $event
];

file_put_contents("seclubmember.txt", json_encode($array));
fclose($myfile);

if(true) {
    header("Location: profile.php");
    exit;
}
?> 
