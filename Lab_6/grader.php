<body>
    <form  method="POST">
        <label>Name: </label><input type="text" name="numbers">
        <input type="submit" name="submit" id ="submit" value="Check Grade">
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
        $num = $_POST["numbers"];
        $num_array = explode(" ", $num);
        // print_r($num_array);

        $total = 0; 
        foreach($num_array as $x){
            $total += $x;
        }
        $total = $total/sizeof($num_array);
        $grades = getGrades($total);
        
        echo "Average score for [", $num, "] is ", $total;
        echo "<br>Average grade is ", $grades;
    }
?>