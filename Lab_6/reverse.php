<body>
    <form method="POST">
        <label>Numbers: </label><input type="text" name="num">
        <input type="submit" name="reverse" value="Reversed sum">
    </form>

</body>

<?php
if (isset($_POST["reverse"])) {
    $num = $_POST["num"];
    $num_array = explode(", ", $num);

    $total = (int)strrev($num_array[0]) + (int)strrev($num_array[1]);
    echo "Total of ",(int)strrev($num_array[0])," and ", (int)strrev($num_array[1])," is ", $total;
}
?> 