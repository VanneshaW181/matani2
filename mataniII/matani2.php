<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Matani II - Website Resmi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #005f99;
            --secondary-color: #00a86b;
            --background-light: #f4f4f4;
            --text-dark: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: var(--background-light);
            color: var(--text-dark);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
            padding: 3rem 0;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('kelurahan.jpeg') no-repeat center center;
            background-size: cover;
            opacity: 0.2;
            z-index: -1;
        }

        .header-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .header-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Navigation */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        .navbar-nav li {
            margin: 0 10px;
        }

        .navbar-nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar-nav a:hover {
            background-color: var(--primary-color);
        }

        /* Main Content */
        .main-content {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .section-title h2 {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: var(--secondary-color);
            bottom: -10px;
            left: 0;
        }

        /* Card Styles */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Footer */
        .footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content h1 {
                font-size: 2rem;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: center;
            }

            .navbar-nav li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <h1>Kelurahan Matani II</h1>
            <p>Website Resmi</p>
            <p>Membangun Transparansi dan Pelayanan Terbaik untuk Masyarakat</p>
        </div>
    </header>

    <nav class="navbar">
        <ul class="navbar-nav container">
            <li><a href="matani2.php"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="ProfilDesa.php"><i class="fas fa-building"></i> Profil Desa</a></li>
            <li><a href="StrukturOrganisasi.php"><i class="fas fa-sitemap"></i> Struktur Organisasi</a></li>
            <li><a href="StatistikDesa.php"><i class="fas fa-chart-bar"></i> Statistik Desa</a></li>
            <li><a href="Galeri.php"><i class="fas fa-images"></i> Galeri</a></li>
            <li><a href="Sejarah.php"><i class="fas fa-history"></i> Sejarah</a></li>
            <li><a href="Kontak.php"><i class="fas fa-envelope"></i> Kontak</a></li>
        </ul>
    </nav>

    <main class="main-content container">
        <section id="beranda">
            <div class="section-title">
                <h2>Selamat Datang</h2>
            </div>
            <div class="card-grid">
                <div class="card">
                    <i class="fas fa-info-circle card-icon"></i>
                    <h3>Informasi Terkini</h3>
                    <p>Imanuel Saraun Kasus</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Kelurahan Matani II - Semua Hak Dilindungi</p>
        </div>
    </footer>
</body>
</html>