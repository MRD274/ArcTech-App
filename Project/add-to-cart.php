<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

$product_id = intval($_POST['product_id']);
$qty = intval($_POST['qty']);
$options = isset($_POST['options']) ? $_POST['options'] : [];

if ($qty < 1) $qty = 1;

// Fetch product from DB
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    // Product not found, redirect somewhere
    header("Location: index.php");
    exit;
}

$product = $result->fetch_assoc();

// Base price from DB
$price = floatval($product['price']);

// Function to parse option strings like "Color: Red(+0)/Blue(+10)"
function parse_option_prices($option_string) {
    $parts = explode(':', $option_string, 2);
    if (count($parts) < 2) return [];

    $options = explode('/', trim($parts[1]));
    $option_prices = [];
    foreach ($options as $opt) {
        if (preg_match('/^(.*)\((\+?[\d\.]+)\)$/', trim($opt), $matches)) {
            $name = trim($matches[1]);
            $price_adj = floatval($matches[2]);
        } else {
            $name = trim($opt);
            $price_adj = 0;
        }
        $option_prices[$name] = $price_adj;
    }
    return $option_prices;
}

//this calculates price adjustments from selected options
$total_price = $price;

if (!empty($options)) {
    // Check option1 price adjustment
    if (!empty($product['option1']) && isset($options['option1'])) {
        $option1_prices = parse_option_prices($product['option1']);
        $selected = $options['option1'];
        if (isset($option1_prices[$selected])) {
            $total_price += $option1_prices[$selected];
        }
    }

    // Check option2 price adjustment
    if (!empty($product['option2']) && isset($options['option2'])) {
        $option2_prices = parse_option_prices($product['option2']);
        $selected = $options['option2'];
        if (isset($option2_prices[$selected])) {
            $total_price += $option2_prices[$selected];
        }
    }
}

// Prepare cart item
$item = [
    'id' => $product['id'],
    'name' => $product['NAME'],
    'price' => $total_price,
    'qty' => $qty,
    'options' => $options
];

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart
$_SESSION['cart'][] = $item;

// Redirect to cart page or product page
header("Location: cart.php");
exit;
