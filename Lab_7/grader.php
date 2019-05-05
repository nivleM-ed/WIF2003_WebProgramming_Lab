<html>

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
            $num1 = $_GET["no1"];
            $num2 = $_GET["no2"];
            $num3 = $_GET["no3"];
            $num4 = $_GET["no4"];
            $num5 = $_GET["no5"];
            $num6 = $_GET["no6"];

            $total = $num1 + $num2 + $num3 + $num4 + $num5 + $num6;
            $total = $total / 6;
            $grades = getGrades($total);

            echo "Average score for [", $num1, " ", $num2, " ", $num3, " ", $num4, " ", $num5, " ", $num6, "] is ", $total;
            echo "<br>Average grade is ", $grades;
        }
    }
    ?>

    <br>
    <form>
        <input type="button" value="Return to previous page" onClick="javascript:history.go(-1)" />
    </form>
</body>

</html>