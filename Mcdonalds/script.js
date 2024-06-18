// JavaScript for adding items to cart
document.addEventListener('DOMContentLoaded', function() {
    showCategory('all');
    initializeCart();
});

function initializeCart() {
    const cartButton = document.getElementById('cart-button');
    const cartCount = document.getElementById('cart-count');
    const cartDropdown = document.getElementById('cart-dropdown');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    let cart = [];

    // Load cart items from localStorage
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        updateCartUI();
    }

    // Update cart UI
    function updateCartUI() {
        cartCount.textContent = cart.length;
        cartItems.innerHTML = '';
        let total = 0;
        cart.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.textContent = item.name + ' - $' + item.price;
            cartItems.appendChild(itemElement);
            total += parseFloat(item.price);
        });
        cartTotal.textContent = 'Total: $' + total.toFixed(2);
    }

    // Add item to cart
    function addToCart(item) {
        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartUI();
    }

    // Show or hide cart dropdown
    cartButton.addEventListener('click', function() {
        cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Add event listener to all "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const itemName = this.getAttribute('data-item');
            const itemPrice = this.getAttribute('data-price');
            addToCart({ name: itemName, price: itemPrice });
        });
    });
}

// Event listener for sign-up button click
document.getElementById('signup-button').addEventListener('click', function() {
    window.location.href = 'signup.html'; // Redirect to the login page
});


function showBreakfast() {
    let breakfastMenu = document.getElementById("breakfast-menu");
    if (breakfastMenu.style.display === "none") {
        breakfastMenu.style.display = "flex"; // Show the breakfast menu items
    } else {
        breakfastMenu.style.display = "none"; // Hide the breakfast menu items
    }
}


function showHappyMeals() {
    let happyMealsMenu = document.getElementById("happy-meals-menu");
    if (happyMealsMenu.style.display === "none") {
        happyMealsMenu.style.display = "flex"; // Show the Happy Meal items
    } else {
        happyMealsMenu.style.display = "none"; // Hide the Happy Meal items
    }
}
function showDessert() {
    let DesserMenu = document.getElementById("dessert-menu");
    if (DesserMenu.style.display === "none") {
        DesserMenu.style.display = "flex"; // Show the Happy Meal items
    } else {
        DesserMenu.style.display = "none"; // Hide the Happy Meal items
    }
}


