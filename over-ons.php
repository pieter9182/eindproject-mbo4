<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Over Ons - lindesignShop</title>
</head>
<body>
    <?php 
        $navbar_class = 'yellow';
        $footer_class = 'yellow';
        include 'navbar.php';
    ?>
    
    <section class="section-geel">
        <div class="hero-container">
            <div class="hero-left">
                <h1 class="hero-title-inline-geel">OVER ONS</h1>
                
                <div class="section-block">
                    <h2 class="section-title">LINDESIGN SHOP</h2>
                    <p class="section-text-boven">LINDESIGN is een onderneming die zich volledig toelegt op het ontdekken, promoten en verkopen van unieke kunstwerken en producten van onbekende maar uitzonderlijk talentvolle kunstenaars.</p>
                    <p class="section-text">Wij geloven dat kunst niet alleen toebehoort aan de grote namen en gevestigde galeries. Achter elke straathoek, in elke stad en elk dorp, schuilen mensen met een buitengewoon creatief talent dat de wereld verdient te zien.</p>
                    <p class="section-text">Ons doel is om deze kunstenaars een professioneel platform te bieden waar zij hun werk kunnen presenteren, hun verhaal kunnen delen en hun creaties kunnen verkopen aan een breed en gepassioneerd publiek.</p>
                    <p class="section-text">Elk kunstwerk in onze shop is zorgvuldig geselecteerd en heeft een eigen verhaal. Of het nu gaat om een handgeschilderd doek, een uniek keramisch object of een ambachtelijk vervaardigd product — bij LINDESIGN vind je altijd iets wat nergens anders te vinden is.</p>
                </div>

                <div class="section-block-kunstenaars-block-geel">
                    <h2 class="section-title-2-geel">Onze missie</h2>
                    <p class="section-text-over-ons-1" style="text-align: center; max-width: 500px;">Bij LINDESIGN geloven we dat talent niet gebonden is aan roem. Onze missie is om kunstenaars die buiten het spotlicht staan een podium te geven — zodat hun werk de wereld bereikt die het verdient.</p>
                    <p class="section-text-over-ons-1" style="text-align: center; max-width: 500px; margin-top: 1.4rem;">Elk kunstwerk dat wij selecteren draagt een eigen ziel. We verbinden makers met mensen die zoeken naar iets echts — iets wat nergens anders te vinden is.</p>
                    <p class="section-text-over-ons-1" style="text-align: center; max-width: 500px; margin-top: 1.4rem;">Want kunst is geen luxe. Het is een gesprek tussen de maker en de wereld — en wij zijn de brug.</p>
                </div>
            </div>

            <div class="hero-right-over-ons-geel">
                <div class="art-section">
                    <h2 class="section-title-art-title-geel">ONZE KUNSTENAARS</h2>
                    <p class="section-text-over-ons-2" style="text-align: center;">Van schilderijen tot sculpturen — wij werken samen met gepassioneerde kunstenaars die hun ziel in elk werk leggen.</p>
                    <div class="circular-image-wrapper">
                        <img src="/img/persoon.jpg" alt="Kunstenaar" class="circular-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>