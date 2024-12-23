<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>

    <link rel="icon" href="images/logoset.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
  @include('components.navbarview')

    <!--content-->
    <div class="contentsejarah">
        <div class="textsejarah">
            <h1>SEJARAH</h1>
        </div>
    </div>
    
    <div class="description">
        <p>LP2M didirikan berdasarkan Peraturan Menteri Agama Republik Indonesia Nomor 7 Tahun 2013 Tentang Organisasi dan Tata Kerja (Ortaker) Universitas Islam Negeri (UIN) Sunan Gunung Djati (SGD) Bandung. Struktur LP2M terbagi menjadi tiga komponen, yaitu: 1) Pusat Penelitian dan Penerbitan; 2) Pusat Pengabdian kepada Masyarakat; 3) dan Pusat Studi Gender dan Anak. Sebelum terhimpun dalam struktur LP2M, komponen pusat-pusat tersebut sebelumnya merupakan lembaga-lembaga tersendiri di lingkungan UIN SGD Bandung sebelumnya Institut Agama Islam Negeri (IAIN) SGD Bandung. Sejak diterbitkannya Ortaker Peraturan Menteri Agama tahun 2013, maka ketiga komponen lembaga tersebut dilebur dan digabungkan dalam struktur LP2M.</p>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="footer-left">
            <img src="images/logo.png" alt="Logo UIN">
        </div>
      
        <div class="footer-center">
            <p>Jl. A.H. Nasution No. 105, <br> Cibiru, Bandung 40614</p>
            <p class="footer-copyright">&copy; 2024 - UIN SGD Bandung</p>
        </div>
      
        <div class="footer-right">
            <p class="footer-about">Sosial Media</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <p>Email: <a>lp2m@uinsgd.ac.id</a></p>
            <p>(022)7800525</p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
