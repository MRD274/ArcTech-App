

<?php
$page_title = "Help Wiki | FAQ - ArcTech";
$page_description = "Learn how to navigate the ArcTech website efficiently. Find help on exploring our options, and more.";
$page_keywords = "help, customization, store, website, help, ArcTech, shopping help, faq";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />
    <meta name="author" content="ArcTech" />

</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <main>
        <section class="help-content">
            <h2>Welcome to the FAQ Help Page</h2>

            <section class="help-details">
                <h2>Top Questions</h2>

                <div>
                    <h3>1. How do I purchase a products from your website?</h3>
                    <p>To purchase a product, navigate to the product details page, select your options, and click “Add to
                        Cart.” Then go to the cart page to review and confirm your order.</p>
                </div>

                <div>
                    <h3>2. Can I choose my options before checkout?</h3>
                    <p>Yes! Each product comes with two customizable options like color, brand, or material type. Use the dropdown menus on
                        the page to choose your preferences before adding to your cart.</p>
                </div>

                <div>
                    <h3>3. Where can I see my selected products?</h3>
                    <p>You can click View Cart  located at the top-right of the page. It shows the number of products in your
                        cart and goes to a view of your selected items.</p>
                </div>

                <div>
                    <h3>4. Can I change my order after it's added to the cart?</h3>
                    <p>You’ll need to remove the item from your cart and re-add it with the updated options.
                    </p>
                </div>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>
