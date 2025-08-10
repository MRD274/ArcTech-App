<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

// You can fetch more user details from the database if needed using user_id
$user_name = isset($_SESSION["user_name"]) ? htmlspecialchars($_SESSION["user_name"]) : "User";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $user_name; ?>'s Profile</title>
</head>
<body>
<?php include 'header.php'; ?>
    <h2>Welcome to your profile, <?php echo $user_name; ?>!</h2>

    <p><a href="logout.php">Logout</a></p>
<?php include 'footer.php'; ?>
</body>

</html>
