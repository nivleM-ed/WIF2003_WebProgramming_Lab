
<?php
    session_start();
    include "config.php"
?>

<body>
    <form method="GET" action="grader.php">
        <input list="students" name="student">
        <datalist id="students">
            <?php 
                $query = "SELECT StudentID FROM students";
                $stmt = $pdo->prepare($query);
                $stmt->execute();

                while($row = $stmt->fetch()) {
                    $str = "<option value='";
                    $str2 = "'>";
                    echo $str . $row['StudentID'] . $str2;
                }
            ?>
        </datalist>
        <div>
        <label>Number 1: </label><input type="text" name="no1"><br>
        <label>Number 2: </label><input type="text" name="no2"><br>
        <label>Number 3: </label><input type="text" name="no3"><br>
        <label>Number 4: </label><input type="text" name="no4"><br>
        <label>Number 5: </label><input type="text" name="no5"><br>
        <label>Number 6: </label><input type="text" name="no6"><br>
        <input type="submit" name="submit" value="Check">
        </div>
    </form>
</body>

