<?php
// Optional: Define page-specific metadata
$page_title = "Help Wiki - ArcTech";
$page_description = "Get help with navigating, choosing items, checking out, and more at ArcTech. Find guides and tips here.";
$page_keywords = "ArcTech, help, FAQ, guide, theme, checkout, navigation, customer support";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">

</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <main>
        <section class="help-content">
            <h2>Welcome to the Help Center</h2>
            <section class="help-details">
                <p>Select a topic from the list below to learn more:</p>
            </section>

            <div class="help-links">
                <ul>
                    <li><a href="help-navigation.php">Navigating Through Pages</a></li>
                    <li><a href="help-custom.php">Choosing Different Options</a></li>
                    <li><a href="help-checkout.php">Checkout Process</a></li>
                    <li><a href="help-theme.php">Theme Changing Process</a></li>
                    <li><a href="help-addproducts.php">Adding Products Process (Admin)</a></li>
                    <li><a href="help-faq.php">FAQ</a></li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>