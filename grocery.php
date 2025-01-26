<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Grocery Inventory</h1>
    <div>
        <h2>Add New Item</h2>
        <form method="post" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="type">Type:</label><br>
            <input type="text" id="type" name="type" required><br>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" step="0.01" required><br>
            <label for="expiryDate">Expiry Date:</label><br>
            <input type="date" id="expiryDate" name="expiryDate" required><br><br>
            <input type="submit" value="Add Item">
        </form>
    </div>
    <h2>Inventory</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Expiry Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //item names array
            $items[] = ["Milk", "Bread", "Eggs", "Apples"];

            // Initialize inventory array
            $inventory = [
                ["name" => "Milk", "type" => "Dairy", "price" => 3.99, "expiryDate" => "2025-02-10"],
                ["name" => "Bread", "type" => "Bakery", "price" => 2.49, "expiryDate" => "2025-01-30"],
                ["name" => "Eggs", "type" => "Poultry", "price" => 4.99, "expiryDate" => "2025-02-05"],
                ["name" => "Apples", "type" => "Fruit", "price" => 1.49, "expiryDate" => "2025-02-15"]
            ];

            // Add new item if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $newItem = [
                    "name" => $_POST["name"],
                    "type" => $_POST["type"],
                    "price" => (float) $_POST["price"],
                    "expiryDate" => $_POST["expiryDate"]
                ];
                array_push($inventory, $newItem);
            }

            // Display inventory
            $today = date("Y-m-d");
            foreach ($inventory as $item) {
                echo "<tr>";
                echo "<td>{$item['name']}</td>";
                echo "<td>{$item['type']}</td>";
                echo "<td>\${$item['price']}</td>";
                echo "<td>{$item['expiryDate']}</td>";
                echo "<td>" . ($item['expiryDate'] < $today ? "<span class='expired'>Expired</span>" : "<span class='valid'>Valid</span>") . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
