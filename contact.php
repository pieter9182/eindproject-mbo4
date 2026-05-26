<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact - lindesignShop</title>
</head>
<body>
    <?php 
        $navbar_class = 'red';
        $footer_class = 'red';
        include 'navbar.php';
        
        $success = false;
        $error = '';
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $subject = trim($_POST['subject'] ?? '');
            $message = trim($_POST['message'] ?? '');
            
            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                $error = 'Vul alstublieft alle velden in.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Voer alstublieft een geldig e-mailadres in.';
            } else {
                $to = 'Damianpietrzak1999@gmail.com';
                $email_subject = 'Nieuw contactbericht: ' . htmlspecialchars($subject);
                
                $email_body = "Naam: " . htmlspecialchars($name) . "\n";
                $email_body .= "Email: " . htmlspecialchars($email) . "\n";
                $email_body .= "Onderwerp: " . htmlspecialchars($subject) . "\n";
                $email_body .= "Bericht:\n" . htmlspecialchars($message);
                
                $headers = "From: " . htmlspecialchars($email) . "\r\n";
                $headers .= "Reply-To: " . htmlspecialchars($email) . "\r\n";
                
                if (mail($to, $email_subject, $email_body, $headers)) {
                    $success = true;
                    $name = $email = $subject = $message = '';
                } else {
                    $error = 'Er is een fout opgetreden. Probeer het later opnieuw.';
                }
            }
        }
    ?>
    
    <section class="section-rood">
        <div class="hero-container single-col">
            <div class="hero-left">
                <h1 class="hero-title">CONTACT</h1>
                
                <div class="section-block">
                    <h2 class="section-title">CONTACTEER ONS</h2>
                    <p class="section-text-boven">Heb je vragen of wil je contact opnemen? Vul het contactformulier in en we nemen zo snel mogelijk contact met je op.</p>
                    <p class="section-text">Email: Damianpietrzak1999@gmail.com</p>
                    <p class="section-text">Telefoon: +31 (0) 6 57997617</p>
                </div>
                
                <div class="simple-contact-form">
                    <?php if ($error): ?>
                        <div class="form-alert error">
                            ✗ <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <div class="form-alert success">
                            ✓ Bedankt! Je bericht is verzonden. We nemen zo snel mogelijk contact met je op.
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" style="margin-top: 30px;">
                        <div class="form-input" style="margin-bottom: 15px;">
                            <input type="text" name="name" placeholder="Jouw naam" value="<?php echo htmlspecialchars($name ?? ''); ?>" required style="width: 100%; padding: 10px; font-size: 1.4rem; border: 1px solid #8E382B; border-radius: 4px; font-family: 'Montserrat', sans-serif;">
                        </div>
                        
                        <div class="form-input" style="margin-bottom: 15px;">
                            <input type="email" name="email" placeholder="Jouw email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required style="width: 100%; padding: 10px; font-size: 1.4rem; border: 1px solid #8E382B; border-radius: 4px; font-family: 'Montserrat', sans-serif;">
                        </div>
                        
                        <div class="form-input" style="margin-bottom: 15px;">
                            <input type="text" name="subject" placeholder="Onderwerp" value="<?php echo htmlspecialchars($subject ?? ''); ?>" required style="width: 100%; padding: 10px; font-size: 1.4rem; border: 1px solid #8E382B; border-radius: 4px; font-family: 'Montserrat', sans-serif;">
                        </div>
                        
                        <div class="form-input" style="margin-bottom: 15px;">
                            <textarea name="message" placeholder="Jouw bericht" rows="5" required style="width: 100%; padding: 10px; font-size: 1.4rem; border: 1px solid #8E382B; border-radius: 4px; font-family: 'Montserrat', sans-serif; resize: vertical;"><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" style="padding: 12px 30px; font-size: 1.4rem; font-weight: 700; color: #ffffff; background-color: #8E382B; border: none; border-radius: 4px; cursor: pointer; font-family: 'Montserrat', sans-serif; text-transform: uppercase; letter-spacing: 1px;">Verzend</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>