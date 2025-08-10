<?php
// Page-specific metadata
$page_title = "Help Wiki | Vehicle Addition Help - ArcTech";
$page_description = "Learn how to navigate the ArcTech website efficiently. Find help on exploring our website addition options, and more.";
$page_keywords = "help, customization, store, website, support, ArcTech, shopping help, addition";
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
            <h2>Welcome to the Vehicle Addition Help Page</h2>

            <section class="help-details">
                <p>
                    Here you will learn about how we add products to our catalogue.
                    Our goal is to ensure that our admins who want to add or edit certain products can do so efficiently and with relative ease.
                </p>

                <p>
                    So, if you're a admin looking to expand our catalog, this guide will walk you through the
                    process of adding a new product quickly and accurately. Our goal is to make sure updates to the catalog are seamless and
                    efficient.
                </p>

                <p>All product data is stored in a database. To add a new product,
                    follow these steps:</p>

                <!-- Step-by-step guidance -->
                <ul>
                    <li>Determine the product you want to add — Keep it line with our other products.</li>
                    <li>Next you need to login with your admin account. You will need your email and password for it (You should know it!).</li>
                    <li>Once you're logged in with your admin account you will be able to see some new options you weren't able to see before:
                        <ul>
                            <li>Profile - You see this as well if you are just logged in as a customer</li>
                            <li>Admin Panel - You only see this with an admin account</li>
                        </ul>
                    </li>
                    <li>From here you need to click Admin Panel which is in the top right conner of the page.</li>
                    <li>This will take you to the Admin Dashboard where you will see many different options:</li>
                        <ul>
                            <li>Add new product section - You'll be able to add a new product to the database by entering the name, price, description and image of it</li>
                            <li>Edit products section - You'll be able to update the name, price, and description of products</li>
                        </ul>
                    <li>And there you go! You'll have access to all the products and be able to add new ones or edit the ones already there. 
                    To go back to the previous page simply click the back button.</li>
                </ul>

                <p>Here is a video if you'd rather just watch how to do it!</p>

                <div class="video-container">
                    <video controls>
                        <source src="Videos/accesstoadmin.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>
