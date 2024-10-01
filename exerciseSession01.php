<?php
session_start();
$_SESSION["work-name"] = $_GET["worker-name"];
$product = $_SESSION["product"] = $_GET["product"];
$quantity = $_SESSION["quantity"] = $_GET["quantity"];

if (!isset($product) && !isset($quantity)) {
    $quantity = $_GET["quantity"];
    switch ($product) {
        case 'milk':
            $_SESSION["product-quantity-milk"] += $quantity;
            break;
        case 'soft-drink':
            $_SESSION["product-quantity-softdrink"] += $quantity;
            break;
        default:
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <h1>Supermarket management</h1>

        <label for="worker-name">Worker name:</label>
        <input type="text" id="worker-name" name="worker-name" value="<?php echo $_SESSION["work-name"]?>"><br>

        <label for="product">Choose product:</label>
        <select id="product" name="product">
            <option value="milk">Milk</option>
            <option value="soft-drink">Soft Drink</option>
        </select><br>

        <label for="quantity">Product quantity:</label>
        <input type="number" id="quantity" name="quantity" value="">

        <input type="submit" value="ADD">
        <button type="button">REMOVE</button>
        <input type="reset" value="RESET">

        <div class="inventory">
            <h3>Inventory:</h3>
            <p id="inventory-worker">Worker: <?php echo $_SESSION["work-name"]?></p>
            <p id="inventory-milk">Units milk: <?php echo $_SESSION["product-quantity-milk"]?></p>
            <p id="inventory-soft-drink">Units soft drink: <?php echo $_SESSION["product-quantity-softdrink"]?></p>
        </div>
    </form>
    

</body>
</html>