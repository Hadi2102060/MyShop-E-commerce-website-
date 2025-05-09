<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - MyShop</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>MyShop</h1>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for products...">
            <button>Search</button>
        </div>
        <nav class="primary-nav">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="categories.html">Categories</a></li>
                <li><a href="deals.html">Deals</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="support.html">Support</a></li>
            </ul>
        </nav>
        <div class="user-menu">
            <a href="signIn.html">Sign In</a>
            <a href="signUp.php" class="active">Sign Up</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
        </div>
    </header>

    <nav class="secondary-nav">
        <ul>
            <li><a href="#">All</a></li>
            <li><a href="#">Today's Deals</a></li>
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Registry</a></li>
            <li><a href="#">Gift Cards</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="auth-container">
            <h2>Create an Account</h2>
            <?php
            // যদি কোনো মেসেজ থাকে তাহলে দেখানো
            if (isset($_GET['message'])) {
                echo "<p style='color: green;'>" . htmlspecialchars($_GET['message']) . "</p>";
            }
            if (isset($_GET['error'])) {
                echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
            }
            ?>
            <form class="auth-form" action="process_signup.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                <div class="form-group checkbox-group">
                    <label><input type="checkbox" name="terms" required> I agree to the <a href="#">Terms & Conditions</a></label>
                </div>
                <button type="submit" class="auth-button">Sign Up</button>
                <p class="auth-link">Already have an account? <a href="signin.html">Sign In</a></p>
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>© 2025 MyShop. All rights reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>
</html>