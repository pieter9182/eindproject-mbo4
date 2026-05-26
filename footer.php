<footer class="custom-footer<?php echo isset($footer_class) ? ' ' . $footer_class : ''; ?>">
    <div class="footer-container">
        <h3 class="footer-title">NAVIGATIE</h3>
        
        <ul class="footer-menu">
            <li><a href="index.php" class="footer-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="producten.php" class="footer-link <?php echo (basename($_SERVER['PHP_SELF']) == 'producten.php') ? 'active' : ''; ?>">producten</a></li>
            <li><a href="over-ons.php" class="footer-link <?php echo (basename($_SERVER['PHP_SELF']) == 'over-ons.php') ? 'active' : ''; ?>">Over ons</a></li>
            <li><a href="contact.php" class="footer-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        
        <div class="footer-copyright">
            <p>&copy; 2026 Damian Pietrzak. Alle rechten voorbehouden.</p>
        </div>
    </div>
</footer>
