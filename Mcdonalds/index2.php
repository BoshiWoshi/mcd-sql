<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's Menu</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">


    <style>
       

    </style>
</head>
<body>
    <header>
        <a href="index.html"><img src="logo.png" alt="McDonald's Logo" id="logo"></a>
        <input type="text" id="search-bar" placeholder="Search...">
        <div id="cart-container">
            <button id="cart-button">Cart (<span id="cart-count">0</span>)</button>
            <div id="cart-dropdown" class="cart-dropdown">
                <div id="cart-items"></div>
                <div id="cart-total"></div>
            </div>
        </div>
        
    
        <a href="edit.php" class="button button-primary">Account</a>
    
        
    </header>

    


    <main id="main-content">
        <div class="banner">
            <img src="/Mcdonalds/images/banner.jpg" id="banner-pls" alt="Banner Image" class ="custom-height"> <!-- Replace with your image path -->
        </div>

        
        <div class="menu-header">
            <h1>Our Menu</h1>
        </div>

        
        <div class="menu-categories">
            <button class="category-button" onclick="showCategory('all')">All</button>
            <button class="category-button" onclick="showCategory('breakfast')">Breakfast</button>
            <button class="category-button" onclick="showCategory('happy-meals')">Happy Meals</button>
            <button class="category-button" onclick="showCategory('dessert')">Dessert</button>
            <button class="category-button">Side & Drinks</button>
        </div>

        <!-- Happy Meals -->
        <div class="menu-container" id="happy-meals-menu" style="display: none;">
            <div class="menu-item">
                <img src="/Mcdonalds/images/hp-chicken-burger.jpg" alt="Happy Meal Chicken Burger">
                <div class="item-info">
                    <h2>Happy Meal Chicken Burger</h2>
                    <p>Price: $4.99</p>
                    <p>Nutritional Info: Calories (558kcal)</p>
                    <button class="add-to-cart" data-item="Happy Meal Chicken Burger" data-price="4.99">Add to Cart</button>
                </div>
            </div>

           
            <div class="menu-item">
                <img src="/Mcdonalds/images/hp-chicken-nuggets.jpg" alt="Happy Meal McNuggets">
                <div class="item-info">
                    <h2>Happy Meal McNuggets</h2>
                    <p>Price: $4.99</p>
                    <p>Nutritional Info: Calories (394kcal)</p>
                    <button class="add-to-cart" data-item="Happy Meal McNuggets" data-price="4.99">Add to Cart</button>
                </div>
            </div>
            <div class="menu-item">
                <img src="/Mcdonalds/images/hp-pancakes.jpg" alt="Happy Meal Pancakes">
                <div class="item-info">
                    <h2>Happy Meal Pancakes</h2>
                    <p>Price: $7.99</p>
                    <p>Nutritional Info: Calories (394kcal)</p>
                    <button class="add-to-cart" data-item="Happy Meal Pancakes" data-price="7.99">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <!-- Breakfast -->
        <div class="menu-container" id="breakfast-menu" style="display: none;">
            <div class="menu-item">
                <img src="/Mcdonalds/images/big-breakfast.jpg" alt="Big Breakfast">
                <div class="item-info">
                    <h2>Big Breakfast</h2>
                    <p>Price: $6.99</p>
                    <p>Nutritional Info: Calories (558kcal)</p>
                    <button class="add-to-cart" data-item="Big Breakfast" data-price="6.99">Add to Cart</button>
                </div>
            </div>
            <div class="menu-item">
                <img src="/Mcdonalds/images/crispy-chicken-muffin.jpg" alt="Crispy Chicken Muffin">
                <div class="item-info">
                    <h2>Crispy Chicken Muffin</h2>
                    <p>Price: $4.99</p>
                    <p>Nutritional Info: Calories (394kcal)</p>
                    <button class="add-to-cart" data-item="Crispy Chicken Muffin" data-price="4.99">Add to Cart</button>
                </div>
            </div>
            <div class="menu-item">
                <img src="/Mcdonalds/images/hashbrowns.jpg" alt="Hashbrowns">
                <div class="item-info">
                    <h2>Hashbrowns</h2>
                    <p>Price: $2.49</p>
                    <p>Nutritional Info: Calories (156kcal)</p>
                    <button class="add-to-cart" data-item="Hashbrowns" data-price="2.49">Add to Cart</button>
                </div>
            </div>
            <div class="menu-item">
                <img src="/Mcdonalds/images/pancakes.jpg" alt="Pancakes">
                <div class="item-info">
                    <h2>Pancakes</h2>
                    <p>Price: $5.99</p>
                    <p>Nutritional Info: Calories (226kcal)</p>
                    <button class="add-to-cart" data-item="Pancakes" data-price="5.99">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Dessert -->
        <div class="menu-container" id="dessert-menu" style="display: none;">
            <div class="menu-item">
                <img src="/Mcdonalds/images/sundae.jpg" alt="Sundae Cone">
                <div class="item-info">
                    <h2>Sundae Cone</h2>
                    <p>Price: $1.99</p>
                    <p>Nutritional Info: Calories (134kcal)</p>
                    <button class="add-to-cart" data-item="Sundae Cone" data-price="1.99">Add to Cart</button>
                </div>
            </div>
            <div class="menu-item">
                <img src="/Mcdonalds/images/Fries.jpg" alt="French Fries">
                <div class="item-info">
                    <h2>French Fries</h2>
                    <p>Price: $2.99</p>
                    <p>Nutritional Info: Calories (423kcal)</p>
                    <button class="add-to-cart" data-item="French Fries" data-price="2.99">Add to Cart</button>
                </div>
            </div>
        </div>

        
    </main>
    

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Ahmad's. All rights reserved.</p>
            <ul>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms-of-service.html">Terms of Service</a></li>
                <li><a href="Accessibility.html">Accessibility</a></li>
            </ul>
        </div>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showCategory('all');
        });

        function showCategory(category) {
            var allMenus = document.querySelectorAll('.menu-container');
            allMenus.forEach(function(menu) {
                menu.style.display = 'none';
            });

            if (category === 'all') {
                allMenus.forEach(function(menu) {
                    menu.style.display = 'flex';
                });
            } else {
                document.getElementById(category + '-menu').style.display = 'flex';
            }
            
        }

        
    </script>
</body>
</html>
