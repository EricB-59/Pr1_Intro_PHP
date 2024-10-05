<?php
session_start();

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [
        'milk' => 3,
        'soft_drink' => 0
    ];
}

if (isset($_POST['worker_name'])) {
    $_SESSION['worker_name'] = $_POST['worker_name'];
}

$error = '';
if (isset($_POST['product'], $_POST['quantity'])) {
    $product = $_POST['product'];
    $quantity = (int) $_POST['quantity'];

    if ($_POST['action'] == 'add') {
        $_SESSION['inventory'][$product] += $quantity;
    } elseif ($_POST['action'] == 'remove') {
        if ($_SESSION['inventory'][$product] >= $quantity) {
            $_SESSION['inventory'][$product] -= $quantity;
        } else {
            $error = "Cannot remove more $product than available!";
        }
    } elseif ($_POST['action'] == 'reset') {
        $_SESSION['inventory'][$product] = 0;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket Management</title>
</head>
<body>
    <h1>Supermarket Management</h1>
    
    <!-- Form for worker name -->
    <form method="POST">
        <label for="worker_name">Worker name: </label>
        <input type="text" id="worker_name" name="worker_name" value="<?php echo isset($_SESSION['worker_name']) ? $_SESSION['worker_name'] : ''; ?>" required>
        <input type="submit" value="Save Worker Name">
    </form>

    <br>
    
    <!-- Product selection form -->
    <form method="POST">
        <label for="product">Choose product: </label>
        <select id="product" name="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft Drink</option>
        </select>

        <label for="quantity">Product quantity: </label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <button type="submit" name="action" value="add">add</button>
        <button type="submit" name="action" value="remove">remove</button>
        <button type="submit" name="action" value="reset">reset</button>
    </form>

    <h2>Inventory:</h2>
    <p>Worker: <?php echo isset($_SESSION['worker_name']) ? $_SESSION['worker_name'] : ' '; ?></p>
    <p>Units milk: <?php echo $_SESSION['inventory']['milk']; ?></p>
    <p>Units soft drink: <?php echo $_SESSION['inventory']['soft_drink']; ?></p>
</body>
</html>
