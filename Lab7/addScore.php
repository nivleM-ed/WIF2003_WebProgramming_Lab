<body>
    <form  method="POST">
        <label>Number 1: </label><input type="text" name="no1" ><br>
        <label>Number 2: </label><input type="text" name="no2" ><br>
        <label>Number 3: </label><input type="text" name="no3" ><br>
        <label>Number 4: </label><input type="text" name="no4" ><br>
        <label>Number 5: </label><input type="text" name="no5" ><br>
        <label>Number 6: </label><input type="text" name="no6" ><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>

<?php
    function getGrades($total) {
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

    if(isset($_POST["submit"])) {
        $num1 = $_POST["no1"];
        $num2 = $_POST["no2"];
        $num3 = $_POST["no3"];
        $num4 = $_POST["no4"];
        $num5 = $_POST["no5"];
        $num6 = $_POST["no6"];

        $total = $num1 + $num2 + $num3 + $num4 + $num5 + $num6;
        $total = $total/6;
        $grades = getGrades($total);
        
        echo "Average score for [", $num1," ",$num2," ",$num3," ",$num4," ",$num5," ",$num6, "] is ", $total;
        echo "<br>Average grade is ", $grades;
    }
?>