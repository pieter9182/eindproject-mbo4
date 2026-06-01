<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Producten - lindesignShop</title>
</head>
<body>
    <?php 
        $navbar_class = 'blauw';
        $footer_class = 'blauw';
        include 'navbar.php';
    ?>
    
    <section class="section-blauw">
        <div class="producten-wrapper">

            <div class="producten-header">
                <h1 class="hero-title-blauw">PRODUCTEN</h1>
                <h2 class="section-title-producten">ONZE COLLECTIE</h2>
                <p class="section-text-producten">Hier vind je al onze beschikbare kunstwerken en producten. Elk stuk is uniek en met zorg geselecteerd.</p>
            </div>

            <div class="producten-content">

                <!-- Sidebar filter -->
                <aside class="filter-sidebar">
                    <h2 class="filter-title">CATEGORIEËN</h2>
                    <ul class="filter-list">
                        <li><button class="filter-btn active" data-filter="all">Alle</button></li>
                        <li><button class="filter-btn" data-filter="van-gogh">Vincent van Gogh</button></li>
                        <li><button class="filter-btn" data-filter="picasso">Pablo Picasso</button></li>
                        <li><button class="filter-btn" data-filter="rembrandt">Rembrandt van Rijn</button></li>
                        <li><button class="filter-btn" data-filter="leonardo">Leonardo da Vinci</button></li>
                    </ul>

                    <h2 class="filter-title filter-title-sort">SORTEREN</h2>
                    <ul class="filter-list">
                        <li><button class="sort-btn active" data-sort="none">Standaard</button></li>
                        <li><button class="sort-btn" data-sort="laag-hoog">Prijs: laag → hoog</button></li>
                        <li><button class="sort-btn" data-sort="hoog-laag">Prijs: hoog → laag</button></li>
                    </ul>
                </aside>

                <!-- Producten grid -->
                <div class="producten-grid">
                    <?php
                    $schilderijen = [
                        ['id' => 1,  'categorie' => 'van-gogh',  'naam' => 'Vincent van Gogh',  'prijs' => 1250, 'afbeelding' => 'img/vincent-bloem.jpg'],
                        ['id' => 2,  'categorie' => 'picasso',   'naam' => 'Pablo Picasso',      'prijs' => 850,  'afbeelding' => 'img/picasso-vrouw.jpg'],
                        ['id' => 3,  'categorie' => 'rembrandt', 'naam' => 'Rembrandt van Rijn', 'prijs' => 1750, 'afbeelding' => 'img/rembrand.jpg'],
                        ['id' => 4,  'categorie' => 'leonardo',  'naam' => 'Leonardo da Vinci',  'prijs' => 2000, 'afbeelding' => 'img/vinci.avif'],
                        ['id' => 5,  'categorie' => 'van-gogh',  'naam' => 'Vincent van Gogh',   'prijs' => 650,  'afbeelding' => 'img/vincent-comet.jpg'],
                        ['id' => 6,  'categorie' => 'picasso',   'naam' => 'Pablo Picasso',      'prijs' => 975,  'afbeelding' => 'img/picasso-vrouw-2.jpg'],
                        ['id' => 7,  'categorie' => 'rembrandt', 'naam' => 'Rembrandt van Rijn', 'prijs' => 1400, 'afbeelding' => 'img/rembrand-boom.jpg'],
                        ['id' => 8,  'categorie' => 'leonardo',  'naam' => 'Leonardo da Vinci',  'prijs' => 1850, 'afbeelding' => 'img/vinci-salvar.jpg'],
                        ['id' => 9,  'categorie' => 'van-gogh',  'naam' => 'Vincent van Gogh',   'prijs' => 200,  'afbeelding' => 'img/vincent-portret.webp'],
                        ['id' => 10, 'categorie' => 'picasso',   'naam' => 'Pablo Picasso',      'prijs' => 550,  'afbeelding' => 'img/picasso-man.jpg'],
                        ['id' => 11, 'categorie' => 'rembrandt', 'naam' => 'Rembrandt van Rijn', 'prijs' => 1100, 'afbeelding' => 'img/rembrand-schip.jpg'],
                        ['id' => 12, 'categorie' => 'leonardo',  'naam' => 'Leonardo da Vinci',  'prijs' => 1600, 'afbeelding' => 'img/vinci-mona.jpg'],
                        ['id' => 13, 'categorie' => 'van-gogh',  'naam' => 'Vincent van Gogh',   'prijs' => 425,  'afbeelding' => 'img/vincent-cypresses.jpg'],
                        ['id' => 14, 'categorie' => 'picasso',   'naam' => 'Pablo Picasso',      'prijs' => 750,  'afbeelding' => 'img/picasso-vrouw-3.jpg'],
                        ['id' => 15, 'categorie' => 'rembrandt', 'naam' => 'Rembrandt van Rijn', 'prijs' => 1950, 'afbeelding' => 'img/rembrand-meisje.jpg'],
                    ];
                    foreach ($schilderijen as $s): ?>
                        <div class="product-card" data-categorie="<?php echo $s['categorie']; ?>" data-prijs="<?php echo $s['prijs']; ?>">
                            <div class="product-image-wrapper">
                                <img 
                                    src="<?php echo $s['afbeelding']; ?>" 
                                    alt="<?php echo $s['naam']; ?> - Schilderij #<?php echo $s['id']; ?>" 
                                    class="product-image"
                                >
                            </div>
                            <div class="product-info">
                                <p class="product-kunstenaar"><?php echo $s['naam']; ?></p>
                                <p class="product-naam">Schilderij #<?php echo $s['id']; ?></p>
                                <p class="product-prijs">€<?php echo number_format($s['prijs'], 0, ',', '.'); ?></p>
                                <button class="koop-btn">KOOP HIER</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>
    <script src="producten.js"></script>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>