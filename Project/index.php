<?php include('db.php'); ?>
<?php include('header.php'); ?>

<div class="container">
    <h1>Welcome to ArcTech</h1>
    <p>Your one-stop shop for cutting-edge gadgets.</p>

    <h2>Featured Products</h2>
    <div class="product-grid">
        <?php
        $sql = "SELECT * FROM products LIMIT 4";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product-card">';
                echo '<a href="productdetails.php?id=' . $row['id'] . '" style="text-decoration: none; color: inherit;">';
                echo '<img src="images/' . htmlspecialchars($row['image']) . '" width="200">';
                echo '<h3>' . htmlspecialchars($row['NAME']) . '</h3>';
                echo '</div>';
            }
        } else {
            echo "<p>No products available.</p>";
        }
        ?>
    </div>
    <h2>Our Location</h2>
    <div style="margin-top:20px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.8413694980185!2d-83.03833328452344!3d42.314936979188875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88299c54b3af8ad9%3A0x8b1d087a7f0d1f3c!2sUniversity%20of%20Windsor!5e0!3m2!1sen!2sca!4v1691512345678!5m2!1sen!2sca"
            width="97%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

</div>


<?php include('footer.php'); ?>
