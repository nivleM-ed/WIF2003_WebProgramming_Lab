<html>
<?php 
session_start();
include "config.php";
?>
<body>

    <?php
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

    if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["submit"])) {
            $stud_id = $_GET["student"];
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
            $query = "INSERT INTO scores(StudentID, Score1, Score2, Score3, Score4, Score5, Score6, Average, Grade) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$stud_id, $num1, $num2, $num3, $num4, $num5, $num6, $total, $grades]);
            $last_id = $pdo->lastInsertId();

            echo "New record created successfully. Last insert ID is:". $last_id;
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
            
        }
    }
    echo "<br><a href='viewScores.php?id=$last_id&student=$stud_id'>View Scores</a><br>";
    ?>
    
    <br>
    <form>
        <input type="button" value="Return to previous page" onClick="javascript:history.go(-1)" />
    </form>
</body>

</html>