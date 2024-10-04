<?php
session_start();
$_SESSION["numbers"][$_SESSION["position"]] = $_SESSION["number"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modify array saved in session</h1>
    <form method="get">
        Position to modify
        <select name="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br><br>

        New value:
        <input type="number" name="number"><br><br>

        <input type="submit" value="Modify">
    </form>


    <div>
        <?php 
        echo var_dump($number_array);
        echo "Current array:";
        foreach ($_SESSION["numbers"] as $value) {
            echo " | ".$value." | ";
        }
        ?>
    </div>
</body>
</html>