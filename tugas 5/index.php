<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Rekomendasi Gadget</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Katalog Styles */
        .catalog {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .catalog-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }
        .catalog-item:hover {
            transform: translateY(-5px);
        }
        .catalog-item img {
            width: 100%;
            height: auto;
        }
        .catalog-item h3 {
            margin: 10px;
            font-size: 1.2em;
            text-align: center;
        }
        .catalog-item p {
            margin: 10px;
            text-align: center;
            color: #666;
        }
        .catalog-item .price {
            font-weight: bold;
            color: #ff6600;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="ulasan.php">Ulasan Terbaru</a></li>
                <li><a href="kategori.php">Kategori</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero" id="home">
            <img src="image.png" alt="Rekomendasi Gadget">
            <div class="overlay">
                <h1>REKOMENDASI GADGET</h1>
            </div>
        </section>
        <section class="catalog" id="catalog">
            <div class="catalog-item">
                <img src="gadget1.jpg" alt="Gadget 1">
                <h3>Smartphone XYZ</h3>
                <p>Smartphone terbaru dengan fitur canggih.</p>
                <p class="price">Rp 3.000.000</p>
            </div>
            <div class="catalog-item">
                <img src="gadget2.jpg" alt="Gadget 2">
                <h3>Tablet ABC</h3>
                <p>Tablet dengan layar besar dan baterai tahan lama.</p>
                <p class="price">Rp 2.500.000</p>
            </div>
            <div class="catalog-item">
                <img src="gadget3.jpg" alt="Gadget 3">
                <h3>Laptop 123</h3>
                <p>Laptop ringan dengan performa tinggi.</p>
                <p class="price">Rp 8.000.000</p>
            </div>
            <div class="catalog-item">
                <img src="gadget4.jpg" alt="Gadget 4">
                <h3>Kamera DEF</h3>
                <p>Kamera mirrorless untuk foto profesional.</p>
                <p class="price">Rp 5.000.000</p>
            </div>
            <div class="catalog-item">
                <img src="gadget5.jpg" alt="Gadget 5">
                <h3>Smartwatch GHI</h3>
                <p>Smartwatch dengan berbagai fitur kesehatan.</p>
                <p class="price">Rp 1.500.000</p>
            </div>
        </section>
        <button id="addItemButton">Tambah Gadget</button>
    </main>
    
    <script src="script.js"></script>
</body>
</html>