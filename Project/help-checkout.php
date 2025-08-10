<?php
// Page-specific metadata
$page_title = "Help Wiki | Checkout Help - ArcTech";
$page_description = "Learn how to navigate the ArcTech website efficiently. Find help on exploring our product options, and more.";
$page_keywords = "help, store, website, support, ArcTech, shopping help, checkout";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="ArcTech">

</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <main>
        <section class="help-content">
            <h2>Welcome to the Checkout Help Page</h2>

            <section class="help-details">
                <p>
                    Here you will learn about our checkout and how it works.
                    Our goal is to ensure that you can use the checkout efficiently and with relative ease.
                </p>

                <p>
                    At the navigation menu to the far right  of every page, you’ll see a View Cart option. This
                    provides quick access to the shopping cart page, where you can review all the products you've added. Every time you
                    add a product, the number increases, and an alert confirms that the item was successfully added.
                </p>

                <p>
                    To add a a product to your cart, simply click on the product you want. It will take you to the product detail page. There, you’ll find an "Add to Cart"
                    button, but before clicking it, make sure to:
                </p>

                <ul>
                    <li>Select your preferred options using the dropdown menus.</li>
                </ul>

                <p>Once those selections are made, clicking the "Add to Cart" button will:</p>
                <ul>
                    <li>Trigger a visual confirmation alert.</li>
                    <li>Update the count.</li>
                    <li>Store the selected product, along with your chosen options and price, in the cart.</li>
                </ul>

                <p>Clicking View Cart takes you to the Cart Page, where you can view:</p>
                <ul>
                    <li>The product(s) you've selected.</li>
                    <li>The options you chose.</li>
                    <li>The price.</li>
                </ul>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
