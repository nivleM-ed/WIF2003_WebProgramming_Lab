<?php
session_start();
include "config.php";
$id = $_GET['id'];
$student = $_GET['student'];
?>

<body>
    <form method="GET" action=<?php echo "editScores.php?id=$id&student=$student"?>>
        <?php
        if (isset($_GET['id'])) {
            try {
                $query = "SELECT * FROM scores WHERE ScoreID=?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$_GET['id']]);
                $result = $stmt->fetch();

                echo $result['StudentID'];
                $_SESSION['id'] = $id;
                $_SESSION['student'] = $result['StudentID'];
                for ($x = 1; $x <= 6; $x++) {
                    $score = "Score";
                    $no = "no";
                    $score = $score . $x;
                    $no = $no.$x;

                    echo "<div><input type='text' value=" . $result[$score] . " name='$no'></div>";
                }
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        ?>
        <input type='submit' name='update' value='Update'>
        <input type='submit' name='delete' value='Delete'>
    </form>
</body>



<form>
    <input type="button" value="Return to previous page" onClick="javascript:history.go(-1)" />
</form>