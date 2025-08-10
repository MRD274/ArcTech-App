const themeSelector = document.getElementById("theme-selector");
const themeStylesheet = document.getElementById("theme-stylesheet");;

if (themeSelector && themeStylesheet) {
    const savedTheme = localStorage.getItem("selectedTheme") || "light.css";
    console.log("Saved theme:", savedTheme);
    themeStylesheet.href = savedTheme;
    themeSelector.value = savedTheme;

    themeSelector.addEventListener("change", function () {
        const selectedTheme = this.value;
        console.log("Switching to theme:", selectedTheme);
        themeStylesheet.href = selectedTheme;
        localStorage.setItem("selectedTheme", selectedTheme);
    });
}

function addToCart(id, name, price) {
    fetch('add-to-cart.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `product_id=${id}&name=${encodeURIComponent(name)}&price=${price}&qty=1`
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            document.getElementById('cart-count').textContent = data.cart_count;
            let msg = document.getElementById('cart-message');
            msg.textContent = 'You added an item to your cart!';
            setTimeout(() => msg.textContent = '', 2000);
        }
    });
}
