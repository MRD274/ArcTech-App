<?php include('db.php'); ?>
<?php include('header.php'); ?>

<div class="container">
    <h1>All Products</h1>
    <div class="product-grid" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product-card">';
                echo '<a href="productdetails.php?id=' . $row['id'] . '" style="text-decoration: none; color: inherit;">';
                echo '<img src="images/' . htmlspecialchars($row['image']) . '" width="200" height="200"><br>';
                echo '<h3>' . htmlspecialchars($row['NAME']) . '</h3>';
                echo '<p><strong>$' . htmlspecialchars($row['price']) . '</strong></p>';
                echo '</div>';
            }
        } else {
            echo "<p>No products available.</p>";
        }
        ?>
    </div>
</div>

<?php include('footer.php'); ?>
