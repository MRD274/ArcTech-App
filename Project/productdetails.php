<?php
include('db.php');
include('header.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p>Invalid product.</p>";
    include('footer.php');
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    echo "<p>Product not found.</p>";
    include('footer.php');
    exit;
}

$row = $result->fetch_assoc();

function parse_options_with_prices($option_string) {
    $parts = explode(':', $option_string, 2);
    $label = trim($parts[0]);
    $options_string = isset($parts[1]) ? trim($parts[1]) : '';
    $opt_values = explode('/', $options_string);

    $options = [];
    foreach ($opt_values as $val) {
        // Match "OptionName(+PriceAdjustment)"
        if (preg_match('/^(.*)\((\+?[\d\.]+)\)$/', trim($val), $matches)) {
            $opt_name = trim($matches[1]);
            $price_adj = floatval($matches[2]);
        } else {
            $opt_name = trim($val);
            $price_adj = 0;
        }
        $options[] = ['name' => $opt_name, 'price_adj' => $price_adj];
    }
    return [$label, $options];
}
?>

<div class="product-detail">
    <div class="product-image">
        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['NAME']); ?>">
    </div>
    <div class="product-info">
        <h1><?php echo htmlspecialchars($row['NAME']); ?></h1>

        <!-- Price display with dynamic updating -->
        <p><strong>Price:</strong> $<span id="product-price"><?php echo htmlspecialchars($row['price']); ?></span></p>

        <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($row['description'])); ?></p>

        <form method="POST" action="add-to-cart.php">

            <?php
            // Option 1
            if (!empty($row['option1'])) {
                list($label, $options) = parse_options_with_prices($row['option1']);
                echo '<label>' . htmlspecialchars($label) . ':</label><br>';
                echo '<select name="options[option1]" class="product-option" data-label="' . htmlspecialchars($label) . '" required>';
                foreach ($options as $opt) {
                    echo '<option value="' . htmlspecialchars($opt['name']) . '" data-price="' . $opt['price_adj'] . '">' . htmlspecialchars($opt['name']) . '</option>';
                }
                echo '</select><br><br>';
            }

            // Option 2
            if (!empty($row['option2'])) {
                list($label, $options) = parse_options_with_prices($row['option2']);
                echo '<label>' . htmlspecialchars($label) . ':</label><br>';
                echo '<select name="options[option2]" class="product-option" data-label="' . htmlspecialchars($label) . '" required>';
                foreach ($options as $opt) {
                    echo '<option value="' . htmlspecialchars($opt['name']) . '" data-price="' . $opt['price_adj'] . '">' . htmlspecialchars($opt['name']) . '</option>';
                }
                echo '</select><br><br>';
            }
            ?>

            <label>Quantity:</label><br>
            <input type="number" name="qty" value="1" min="1" required><br><br>

            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

            <button type="submit">Add to Cart</button>
        </form>
    </div>
</div>

<script>
  const basePrice = parseFloat(<?php echo json_encode($row['price']); ?>);
  const priceDisplay = document.getElementById('product-price');
  const optionSelectors = document.querySelectorAll('.product-option');

  function updatePrice() {
    let price = basePrice;

    optionSelectors.forEach(select => {
      const selectedOption = select.options[select.selectedIndex];
      const priceAdj = parseFloat(selectedOption.getAttribute('data-price')) || 0;
      price += priceAdj;
    });

    priceDisplay.textContent = price.toFixed(2);
  }

  optionSelectors.forEach(select => {
    select.addEventListener('change', updatePrice);
  });

  // Initialize price on page load
  updatePrice();
</script>

<?php include('footer.php'); ?>