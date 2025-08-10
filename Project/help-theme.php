<?php
// Page-specific metadata
$page_title = "Help Wiki | Theme Help - ArcTech";
$page_description = "Learn how to navigate the ArcTech website efficiently. Find help on exploring our website theme options, and more.";
$page_keywords = "help, customization, store, website, support, ArcTech, shopping help, theme";
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
            <h2>Welcome to the Theme Help Page</h2>

            <section class="help-details">
                <p>
                    Here you will learn about our theme changer and how it works.
                    Our goal is to ensure that you can use the theme changer efficiently and with relative ease.
                </p>

                <p>
                    At the top of every page, just below the main navigation menu, you'll find the Theme Changer — a simple and convenient
                    dropdown menu that allows you to change the website's appearance.
                </p>

                <p>
                    <strong>Currently, there are three unique themes available:</strong><br>
                    • Light Theme (default)<br>
                    • Dark Theme<br>
                    • Winter Theme
                </p>

                <p>
                    <strong>Using the theme changer is very straightforward:</strong><br>
                    1. Click on the dropdown menu labeled with the current theme (by default, this is "Default Theme").<br>
                    2. A list of available themes will appear.<br>
                    3. Simply select the one you'd like to apply — and the website’s entire appearance will update instantly!
                </p>

                <p>
                    <strong>Pro Tip:</strong>  
                    The selected theme applies to all pages of the website, so you’ll continue enjoying your preferred look and
                    feel as you navigate through the site. Since the theme changer appears on every page, you can switch themes anytime,
                    from anywhere on the site.
                </p>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>