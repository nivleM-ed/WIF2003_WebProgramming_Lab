<?php
session_start();
include "config.php";

function getGrades($total)
    {
        switch ($total) {
            case $total >= 80:
                return "A";
                break;
            case $total >= 60:
                return "B";
                break;
            case $total >= 40:
                return "C";
                break;
            case $total >= 20:
                return "D";
                break;
            case $total >= 1:
                return "E";
                break;
            default:
                return "F";
        }
    }

    if (isset($_GET["update"])) {
        $id = $_SESSION["id"];
        $stud_id = $_SESSION["student"];
        $num1 = $_GET["no1"];
        $num2 = $_GET["no2"];
        $num3 = $_GET["no3"];
        $num4 = $_GET["no4"];
        $num5 = $_GET["no5"];
        $num6 = $_GET["no6"];

        $total = $num1 + $num2 + $num3 + $num4 + $num5 + $num6;
        $total = $total / 6;
        $grades = getGrades($total);

        echo "You have entered 6 scores for ". $stud_id. "<br>";
        echo "Average score for [", $num1, " ", $num2, " ", $num3, " ", $num4, " ", $num5, " ", $num6, "] is ", $total;
        echo "<br>Average grade is ", $grades, "<br>";

        try {
        $query = "UPDATE scores SET Score1=?, Score2=?, Score3=?, Score4=?, Score5=?, Score6=?, Average=?, Grade=? WHERE ScoreID=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$num1, $num2, $num3, $num4, $num5, $num6, $total, $grades, $id]);

        echo "Record updated";
        } catch (PDOException $e) {
            echo "test";
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    if(isset($_GET['delete'])) {
        $id = $_SESSION["id"];
        try {
            $query = "DELETE FROM scores WHERE ScoreID=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            echo "Data deleted.";
        } catch(PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
        
    }
?>

<body>
    <br><br><a href="addScore.php">Add new Scores</a>
</body>