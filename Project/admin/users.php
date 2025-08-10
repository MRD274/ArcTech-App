<?php
session_start();
if (!$_SESSION["is_admin"]) die("Admins only");
include('db.php');

if (isset($_POST["disable"])) {
    $id = $_POST["user_id"];
    $conn->query("UPDATE users SET is_disabled = 1 WHERE id = $id");
}

$result = $conn->query("SELECT * FROM users");
while ($user = $result->fetch_assoc()) {
    echo "{$user['name']} ({$user['email']}) - ";
    echo $user['is_disabled'] ? "Disabled" : "Active";
    echo "<form method='POST' style='display:inline;'>
        <input type='hidden' name='user_id' value='{$user['id']}'>
        <button name='disable'>Disable</button>
    </form><hr>";
}
