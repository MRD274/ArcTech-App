<?php
session_start();
require 'db.php'; // your database connection

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login with redirect back to checkout after login
    header("Location: login.php?redirect=checkout.php");
    exit;
}

// If cart is empty, redirect to cart page or show message
if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty. <a href='products.php'>Go shopping</a></p>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_order'])) {
    // Here you would normally save the order to your database
    // For demo, just clear the cart and thank the user
    
    // Example: Save order logic here...

    $_SESSION['cart'] = []; // clear cart

    echo "<h2>Thank you for your purchase, {$_SESSION['user_name']}!</h2>";
    echo "<p>Your order has been placed successfully.</p>";
    echo "<p><a href='products.php'>Continue Shopping</a></p>";
    exit;
}

$total = 0;
?>

<?php include 'header.php'; ?>

<h2>Checkout</h2>

<h3>Order Summary</h3>
<div class="order-summary">
<?php foreach ($_SESSION['cart'] as $item): 
    $item_total = $item['price'] * $item['qty'];
    $total += $item_total;
?>
    <div>
        <strong><?php echo htmlspecialchars($item['name']); ?></strong> - Qty: <?php echo $item['qty']; ?><br>
        Price: $<?php echo number_format($item_total, 2); ?><br>
        <?php foreach ($item['options'] as $label => $value): ?>
            <?php echo htmlspecialchars($label); ?>: <?php echo htmlspecialchars($value); ?><br>
        <?php endforeach; ?>
    </div>
    <hr>
<?php endforeach; ?>

<h3>Total: $<?php echo number_format($total, 2); ?></h3>
</div>

<form method="POST">
    <button type="submit" name="confirm_order">Confirm Order</button>
</form>

<?php include 'footer.php'; ?>
