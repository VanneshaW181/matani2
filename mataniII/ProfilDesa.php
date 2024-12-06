<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa - Kelurahan Matani II</title>
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
            opacity: 0.3;
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

        .profil-content {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .profil-text {
            width: 60%;
        }

        .profil-img {
            width: 30%;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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

            .section-title h2 {
                font-size: 2rem;
            }

            .profil-content {
                flex-direction: column;
                align-items: center;
            }

            .profil-text, .profil-img {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <h1>Kelurahan Matani II</h1>
            <p>Website Resmi</p>
            <p>Profil Desa</p>
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
        <section id="profil-desa">
            <div class="section-title">
                <h2>Profil Desa Kelurahan Matani II</h2>
            </div>

            <div class="profil-content">
                <div class="profil-text">
                    <h3>Sejarah Kelurahan</h3>
                    <p>Kelurahan Matani II terletak di Kecamatan Tomohon Selatan, Kota Tomohon, Provinsi Sulawesi Utara. Desa ini memiliki sejarah panjang dalam perjalanan pembangunan daerah. Berbagai kegiatan sosial dan budaya telah dilakukan, menjadikannya sebagai salah satu desa yang berkembang pesat di daerah tersebut. Di Kelurahan Matani II, masyarakat hidup rukun dan menjaga nilai-nilai adat serta tradisi setempat. Kelurahan ini juga memiliki potensi alam yang cukup baik untuk pertanian dan pariwisata.</p>

                    <h3>Visi dan Misi</h3>
                    <p>Visi Kelurahan Matani II adalah menjadi kelurahan yang maju, mandiri, dan sejahtera dengan mengutamakan keberlanjutan lingkungan dan pemberdayaan masyarakat. Misi yang diemban antara lain meningkatkan kualitas pelayanan publik, mempercepat pembangunan infrastruktur, dan menciptakan lapangan kerja bagi masyarakat sekitar.</p>
                </div>

                <div class="profil-img">
                    <img src="profil-desa-image.jpg" alt="Profil Desa Kelurahan Matani II" class="profil-img">
                </div>
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
