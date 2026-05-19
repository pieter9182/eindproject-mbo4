<nav class="custom-navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <span class="logo-text">LINDESIGN SHOP</span>
        </div>
        
        <div class="navbar-links">
            <a href="index.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">HOME</a>
            <a href="producten.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'producten.php') ? 'active' : ''; ?>">PRODUCTEN</a>
            <a href="over-ons.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'over-ons.php') ? 'active' : ''; ?>">OVER ONS</a>
            <a href="contact.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">CONTACT</a>
        </div>

        <div class="navbar-cart">
            <svg class="cart-svg" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
        </div>
    </div>
</nav>
