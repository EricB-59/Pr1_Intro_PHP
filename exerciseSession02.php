<?php
session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30];
}

$array = $_SESSION['array'];

// Modificar el valor del array en la posición especificada
if (isset($_POST['modify'])) {
    $position = (int) $_POST['position'];
    $new_value = (int) $_POST['new_value'];
    if ($position >= 0 && $position < count($array)) {
        $array[$position] = $new_value;
        $_SESSION['array'] = $array;
    }
}

// Calcular la media del array
if (isset($_POST['average'])) {
    $average = array_sum($array) / count($array);
    echo "<p>El valor medio del array es: " . $average . "</p>";
}

if (isset($_POST['reset'])) {
    $_SESSION['array'] = [10, 20, 30];
    $array = $_SESSION['array'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Modify array saved in session</h1>
    
    <form method="POST">
        <label for="position">Postion to modify:</label>
        <select name="position" id="position">
            <?php
            for ($i = 0; $i < count($array); $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label for="new_value">New value:</label>
        <input type="number" name="new_value" id="new_value" required><br><br>

        <button type="submit" name="modify">Modify</button>
        <button type="submit" name="average">Average</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <p>Array actual: <?php echo implode(', ', $array); ?></p>
</body>
</html>
