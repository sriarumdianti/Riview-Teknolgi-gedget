<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Terbaru - Rekomendasi Smartphone</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Katalog Styles */
        #reviews {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .review-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
            padding: 15px;
        }
        .review-item:hover {
            transform: translateY(-5px);
        }
        .review-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .review-item h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .review-item p {
            margin: 10px 0;
            color: #666;
        }
        .review-item .rating {
            font-weight: bold;
            color: #ff6600;
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
        <section id="ulasan-terbaru">
            <h2>Ulasan Terbaru</h2>
            <div id="reviews">
                <div class="review-item">
                    <img src="assets/smartphone 1.jpg" alt="Smartphone 1">
                    <h3>Smartphone XYZ</h3>
                    <p>Smartphone terbaru dengan fitur kamera 108MP dan baterai 5000mAh.</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
                <div class="review-item">
                    <img src="assets/smartphone 2.jpg" alt="Smartphone 2">
                    <h3>Smartphone ABC</h3>
                    <p>Smartphone dengan layar AMOLED dan performa cepat berkat prosesor terbaru.</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐</p>
                </div>
                <div class="review-item">
                    <img src="assets/tablet 1.jpg" alt="Tablet 1">
                    <h3>Tablet DEF</h3>
                    <p>Tablet dengan layar besar dan fitur multitasking yang hebat.</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
                <div class="review-item">
                    <img src="assets/laptop 1.jpg" alt="Laptop 1">
                    <h3>Laptop GHI</h3>
                    <p>Laptop ringan dan portabel dengan baterai tahan lama.</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
                <div class="review-item">
                    <img src="assets/smartwatch 1.jpg" alt="Smartwatch 1">
                    <h3>Smartwatch JKL</h3>
                    <p>Smartwatch dengan fitur pelacakan kesehatan dan notifikasi pintar.</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>