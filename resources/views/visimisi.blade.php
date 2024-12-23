<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi & Tujuan</title>
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
    <!--header-->
    <!-- Navbar -->
  @include('components.navbarview')

    <div class="containervm">
        <div class="image-containervm">
         <img alt="UIN"  src="images/image.png"  />
        </div>
        <div class="text-containervm">
         <h1>TUJUAN</h1>
         <ol>
            <li>Terkelolanya sistem administrasi kelembagaan secara profesional, transparan, dan akuntabel,</li>
            <li>Terkelolanya penelitian dengan memperhatikan peningkatan mutu, perluasan diversifikasi pendekatan, dan penguatan signifikansi sosial hasil penelitian,</li>
            <li>Terkelolanya pengabdian kepada masyarakat berbasis kompetensi, tematik, lintas sektoral, dan interdisipliner, dan</li>
            <li>Terwujudnya penguatan lembaga dengan menjalin kerjasama, memperluas akses jejaring kemitraan, dan membuka komunikasi pengembangan kelembagaan</li>
         </ol>
        </div>
       </div>

       <div class="container-md mb-5">
        <div class="row">
         <div class="col-md-6">
          <div class="visi text-center">
           <h4>
            VISI
           </h4>
           <span>
            Penguatan Penelitian dan Pengabdian kepada Masyarakat
           </span>
          </div>
          <div class="misi">
           <h4 class="text-center">
            MISI
           </h4>
           <ol>
            <li>
             Mengelola lembaga secara profesional, transparan, dan akuntabel,
            </li>
            <li>
             Mengelola penelitian dengan memperhatikan peningkatan mutu, perluasan diversifikasi pendekatan, dan penguatan signifikasi sosial hasil penelitian,
            </li>
            <li>
             Mengelola pengabdian kepada masyarakat berbasis kompetensi, tematik, lintas sektoral, dan interdisipliner, dan
            </li>
            <li>
             Mewujudkan penguatan lembaga dengan menjalin kerjasama, memperluas akses jejaring kemitraan, dan membuka komunikasi pengembangan kelembagaan
            </li>
           </ol>
          </div>
         </div>
         <div class="col-md-6">
          <div class="sasaran">
           <h4 class="text-center">
            SASARAN
           </h4>
           <ol>
            <li>
             Terumuskannya rencana strategis program kegiatan selama 4 tahun ke depan;
            </li>
            <li>
             Terwujudnya publikasi ilmiah hasil penelitian unggulan, buku daras, dan jurnal terakreditasi;
            </li>
            <li>
             Terselenggaranya model pengabdian kepada masyarakat berbasis pengembangan IPTEKS;
            </li>
            <li>
             Terwujudnya sistem informasi komunikasi dan teknologi pengelolaan dan pelayanan publik di lingkungan internal dan eksternal;
            </li>
            <li>
             Terjalinnya kerjasama dan kemitraan dengan lembaga pemerintah dan swasta di bidang penelitian, penerbitan, pengabdian kepada masyarakat, dan studi gender dan anak; dan
            </li>
            <li>
             Terbukanya pasar pengguna produk dan jasa LP2M.Terwujudnya perpustakaan sebagai pusat sumber belajar yang mendukung peningkatan mutu akademik dan penelitian.
            </li>
           </ol>
          </div>
         </div>
        </div>
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