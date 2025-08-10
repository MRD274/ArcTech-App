<?php
session_start();
include("header.php");

echo "<h2>Your Cart</h2>";

if (!empty($_SESSION['cart'])) {
    $total = 0;
    foreach ($_SESSION['cart'] as $index => $item) {
        $item_total = $item['price'] * $item['qty'];
        $total += $item_total;

        echo "<div class='cart-item'>";
        echo "<strong>{$item['name']}</strong><br>";
        echo "Qty: {$item['qty']}<br>";
        foreach ($item['options'] as $label => $value) {
            echo "$label: $value<br>";
        }
        echo "Price: $" . number_format($item_total, 2) . "<br>";
        echo "<a href='remove-from-cart.php?index=$index'>Remove</a>";
        echo "<hr></div>";
    }

    echo "<h3>Total: $" . number_format($total, 2) . "</h3>";
    if (isset($_SESSION['user_id'])) {
    // User logged in — go to checkout/order page
    echo '<a href="checkout.php" class="btn-checkout">Proceed to Checkout</a>';
    } else {
        // Not logged in — redirect to login page
        echo '<a href="login.php?redirect=checkout.php" class="btn-checkout">Login to Checkout</a>';
    }
} else {
    echo "<p>Your cart is empty.</p>";
}

include("footer.php");
