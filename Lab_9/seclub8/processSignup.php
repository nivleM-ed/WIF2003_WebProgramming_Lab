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
            if ($stud_id['studentid'] == $id) {return false; }
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
            if ($stud_email['email'] == $email) { return false;}
        }
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
    return true;
}

function checkPassword($password, $rpassword) {
    if($password == $rpassword)
        return true;
    return false;
}

function passHash($password) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    return $hash;
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
        header("Location: ../seclub8/signup.php?error=takenidemail");
        exit();
    } elseif (checkID($studentID) == false) {
        header("Location: ../seclub8/signup.php?error=takenid");
        exit();
    } elseif (checkEmail($email) == false) {
        header("Location: ../seclub8/signup.php?error=takenemail");
        exit();
    } elseif (checkPassword($password, $rpassword) == false) {
        header ("Location: ../seclub8/signup.php?error=rpass");
        exit();
    }

    $password = passHash($password);

    try {
        $query = ("INSERT INTO members(name, studentid, email, password, birthday, event) VALUES (?,?,?,?,?,?)");
        $stmt = $pdo->prepare($query);
        $stmt->execute([$uname, $studentID, $email, $password, $birthday, $event]);
        header("Location: ../seclub8/login.php?signup=success");
        exit();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}
