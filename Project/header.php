<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the latest gadgets at ArcTech. Your one-stop shop for innovative and cutting-edge technology products." />
    <meta name="keywords" content="gadgets, tech store, electronics, cutting-edge technology, ArcTech" />
    <meta name="author" content="ArcTech Team" />



    <title>ArcTech</title>
    <meta charset="UTF-8">
    <link id="theme-stylesheet" rel="stylesheet" href="light.css">
    <base href="https://rivasde.myweb.cs.uwindsor.ca/Comp3340/Project/">
</head>
<body>
<header>
    <div class="header-top">
        <h2 class="name">ArcTech</h2>
        <div class="auth">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="profile.php">Profile</a>
                <?php if (!empty($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                    <a href="admin/dashboard.php">Admin Panel</a>
                <?php endif; ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a> 
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>

    <nav>
        <a href="index.php">Home</a> 
        <a href="products.php">All Products</a>
        <a href="about.php">About Us</a>
        <a href="help.php">Help</a>
        <a href="contact.php">Contact</a> 
        <a href="reviews.php">Reviews</a>
        <a href="cart.php" style="text-decoration:none;">
            🛒 View Cart (<span id="cart-count">
                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </span>)
        </a>
        <span id="cart-message" style="color:green; margin-left:10px;"></span>
    </nav>

    <div class="theme-selector">
        <label for="theme-selector">Theme:</label>
        <select id="theme-selector">
            <option value="light.css">Default</option>
            <option value="dark.css">Dark</option>
            <option value="winter.css">Winter</option>
        </select>
    </div>
</header>
<main>
