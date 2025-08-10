<?php
// Page-specific metadata
$page_title = "Help Wiki | Navigation Help - ArcTech";
$page_description = "Learn how to navigate the website efficiently. Find help on exploring our product catalog, support options, and more.";
$page_keywords = "help, navigation, support, shopping help, navigation";
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
            <h2>Welcome to the Navigation Page</h2>

            <section class="help-details">
                <p>
                    Here you will learn how to navigate through the website to find exactly what you're looking for.
                    Our goal is to ensure that you can explore the entire site with ease and convenience.
                </p>

                <p>
                    At the top of the page, you will find a navigation menu with various links.
                    These links take you to different sections of the website where you can view info,
                    get support, and more.
                </p>

                <p>Here are some of the main sections available through the navigation menu:</p>

                <ul>
                    <li><strong>All Products:</strong> View all the products we offer, complete with a information of it,
                        specifications, available colors, and customization options.</li>
                    <li><strong>About Us:</strong> Learn more about our company, our mission, and our dedication to quality and service.
                    </li>
                    <li><strong>Help:</strong> Access FAQs, adding products and help for any issues you encounter.</li>
                    <li><strong>Checkout:</strong> Finalize your purchase, choose payment options, and confirm your order.
                    </li>
                </ul>

                <p>
                    This structure ensures a smooth browsing experience so you can move between pages easily.
                </p>

                <p>
                    If you ever need help, feel free to revisit this page or the Help Wiki for guidance.
                </p>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
