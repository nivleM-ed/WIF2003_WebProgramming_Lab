<?php
session_start();
include "config.php";

function checkID($id)
{
    include "config.php";

    try {
        $query = "SELECT StudentID FROM members";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        while ($stud_id = $stmt->fetch()) {
            if ($stud_id['StudentID'] == $id) {return false; }
        }
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    return true;
}

function checkEmail($email)
{
    include "config.php";
    try {
        $query = "SELECT Email FROM members";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        while ($stud_email = $stmt->fetch()) {
            if ($stud_email['Email'] == $email) { return false;}
        }
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    return true;
}

if (isset($_POST['signup'])) {
    $uname = $_POST["name"];
    $studentID = $_POST["studentid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["repeatpassword"];
    $birthday = $_POST["bday"];
    $event = $_POST["favevent"];

    if (checkID($studentID) == false && checkEmail($email) == false) {
        header("Location: ../seclub7/signup.php?error=takenidemail");
    } elseif (checkID($studentID) == false) {
        header("Location: ../seclub7/signup.php?error=takenid");
    } elseif (checkEmail($email) == false) {
        header("Location: ../seclub7/signup.php?error=takenemail");
    }

    try {
        $query = ("INSERT INTO members(UName, StudentID, Email, Pass, Bday, favevent) VALUES (?,?,?,?,?,?)");
        $stmt = $pdo->prepare($query);
        $stmt->execute([$uname, $studentID, $email, $password, $birthday, $event]);
        header("Location: ../seclub7/signup.php?signup=success");
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}
