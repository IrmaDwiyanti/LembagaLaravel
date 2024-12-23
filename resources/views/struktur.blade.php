<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIN Sunan Gunung Djati Bandung</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

    <main class="contentstr">
        <h1 class="title-sectionstr">PIMPINAN</h1>
        
        <section class="namestr">
            <img src="https://placehold.co/100x150" alt="ketua" class="name-img">
            <div class="name-infostr">
                <h2>Ketua Lembaga Penelitian dan Pengabdian Masyarakat (LP2M)</h2>
                <p>Dr. H. Setia Gumilar, S.Ag., M.Si.</p>
            </div>
        </section>
        
        <section class="namestr">
            <img src="https://placehold.co/100x150" alt="struktur" class="name-img">
            <div class="name-infostr">
                <h2>Sekretaris LP2M</h2>
                <p>Dr. H. Sarbini, M.Ag</p>
            </div>
        </section>

        <section class="namestr">
            <img src="https://placehold.co/100x150" alt="struktur" class="name-img">
            <div class="name-infostr">
                <h2>Kepala Pusat Pengabdian Kepada Masyarakat</h2>
                <p>Dr. H. Aep Kusnawan, M.Ag</p>
            </div>
        </section>
        
        <section class="namestr">
            <img src="https://placehold.co/100x150" alt="struktur" class="name-img">
            <div class="name-infostr">
                <h2>Kepala Pusat Penelitian dan Penerbitan</h2>
                <p>Dr. H. Deni Miharja, M.Ag</p>
            </div>
        </section>

        <section class="namestr">
            <img src="https://placehold.co/100x150" alt="struktur" class="name-img">
            <div class="name-infostr">
                <h2>Kepala Pusat Gender dan Anak</h2>
                <p>Irma Riyani, Ph.D.</p>
            </div>
        </section>
        
        <div class="linksstr">
            <h5>Lihat Lainnya:</h5>
            <a href="struktur2">Tata Usaha</a>
        </div>
    </main>

    
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
