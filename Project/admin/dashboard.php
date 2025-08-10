<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION["is_admin"]) || !$_SESSION["is_admin"]) {
    die("Admins only");
}

include('../db.php');

// ---- ADD PRODUCT ----
if (isset($_POST['add_product'])) {
    $name = $_POST["NAME"];
    $price = (float) $_POST["price"];
    $description = $_POST["description"];
    $image = $_POST["image"]; // path or filename, depending on your setup

    $stmt = $conn->prepare("INSERT INTO products (NAME, price, description, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $name, $price, $description, $image);
    $stmt->execute();
    $stmt->close();
    echo "<p style='color:green;'>Product added successfully!</p>";
}

// ---- UPDATE PRODUCT ----
if (isset($_POST['update_product'])) {
    $id = (int) $_POST["id"];
    $name = $_POST["NAME"];
    $price = (float) $_POST["price"];
    $description = $_POST["description"];

    $stmt = $conn->prepare("UPDATE products SET NAME = ?, price = ?, description = ? WHERE id = ?");
    $stmt->bind_param("sdsi", $name, $price, $description, $id);
    $stmt->execute();
    $stmt->close();
    echo "<p style='color:green;'>Product updated successfully!</p>";
}

// ---- PRODUCT LIST FOR EDIT ----
$result = $conn->query("SELECT * FROM products");
?>

<div class="container" style="max-width:800px; margin:auto;">
    <h1>Admin Dashboard</h1>

    <!-- Back button -->
    <button onclick="window.history.back()" style="margin-bottom:15px; padding:8px 12px; background:#007BFF; color:white; border:none; border-radius:5px; cursor:pointer;">
        ⬅ Back
    </button>

    <h2>Add New Product</h2>
    <form method="POST" style="border:1px solid #ccc; padding:15px; margin-bottom:30px;">
        <label>Name:</label><br>
        <input name="NAME" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>

        <label>Image Filename (in images/ folder):</label><br>
        <input name="image" required><br><br>

        <button type="submit" name="add_product" style="padding:8px 12px; background:green; color:white; border:none; border-radius:5px;">Add Product</button>
    </form>

    <h2>Edit Products</h2>
    <?php while ($row = $result->fetch_assoc()): ?>
        <form method="POST" style="border:1px solid #ccc; padding:15px; margin-bottom:20px;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <label>Name:</label><br>
            <input name="NAME" value="<?= htmlspecialchars($row['NAME']) ?>"><br><br>

            <label>Price:</label><br>
            <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($row['price']) ?>"><br><br>

            <label>Description:</label><br>
            <textarea name="description" rows="4"><?= htmlspecialchars($row['description']) ?></textarea><br><br>

            <button type="submit" name="update_product" style="padding:8px 12px; background:orange; color:white; border:none; border-radius:5px;">Update</button>
        </form>
    <?php endwhile; ?>
</div>