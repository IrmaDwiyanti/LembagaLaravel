<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM UIN SGD Bandung</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>

    <link rel="icon" href="images/logoset.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--header-->
  <div class="header">
    <span>UKM</span>
    <div class="menu-bars" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </div>
    <div class="nav-links">
        <a href="home">HOME</a>
        <a href="pusat">PUSAT</a>
        <a href="ukm">UKM</a>
        <div class="dropdown">
            <a href="#" onclick="toggleDropdown(event)">FAKULTAS & PRODI</a>
            <div class="dropdown-content">
                <a href="https://fah.uinsgd.ac.id/">Adab dan Humaniora</a>
                <a href="https://fdk.uinsgd.ac.id/">Dakwah dan Komunikasi</a>
                <a href="https://febi.uinsgd.ac.id/">Ekonomi dan Bisnis Islam</a>
                <a href="https://fisip.uinsgd.ac.id/">Ilmu Sosial dan Ilmu Politik</a>
                <a href="https://psi.uinsgd.ac.id/">Psikologi</a>
                <a href="https://fst.uinsgd.ac.id/">Sains dan Teknologi</a>
                <a href="https://fsh.uinsgd.ac.id/">Syariah dan Hukum</a>
                <a href="https://ftk.uinsgd.ac.id/">Tarbiyah dan Keguruan</a>
                <a href="https://fu.uinsgd.ac.id/">Ushuluddin</a>
            </div>
        </div>
    </div>
</div>

   <!--content ukm-->
   <div class="containerukm">
    <div class="headerukm">
        <div class="header-contentukm">
            <i class="fas fa-users" style="font-size: 30px; color: #4CAF50; margin-bottom: 10px;"></i>
            <h1>Unit Kegiatan<br>Mahasiswa</h1>
            <p>Inilah kesempatan Anda untuk menemukan passion yang sesungguhnya! Mari kita jelajahi beragam UKM dan UKK yang tersedia, dan temukan wadah yang paling sesuai dengan minat Anda. Bergabunglah dalam komunitas dinamis yang siap menginspirasi, mendukung, dan membawa perubahan positif, baik bagi diri Anda sendiri maupun lingkungan sekitar. Jadilah bagian dari perjalanan menarik ini, di mana setiap langkah Anda akan menciptakan dampak yang berarti!</p>
        </div>
    </div>
    <div class="sub-headerukm">
        Daftar Unit Kegiatan Mahasiswa (UKM), Unit Kegiatan Khusus (UKK) di lingkungan UIN Sunan Gunung Djati Bandung :
    </div>
    <div class="separator"></div>
    <div class="ukm-list">
        <div class="ukm-item">Ukk Pramuka</div>
        <div class="ukm-item">Ukk Resimen Mahasiswa</div>
        <div class="ukm-item">Ukk Pramuka</div>
        <div class="ukm-item">UKK KOPMA</div>
        <div class="ukm-item">UKM TADJIMALELA</div>
        <div class="ukm-item">UKM LDM</div>
        <div class="ukm-item">UKM WSC</div>
        <div class="ukm-item">UKM TAEKWONDO</div>
        <div class="ukm-item">UKM BKC</div>
        <div class="ukm-item">UKM PS-PSPB</div>
        <div class="ukm-item">UKM FABBIS</div>
        <div class="ukm-item">UKM LIGA</div>
        <div class="ukm-item">UKM SRD</div>
        <div class="ukm-item">UKM IVMU</div>
        <div class="ukm-item">UKM LIKM</div>
        <div class="ukm-item">UKM LPB</div>
        <div class="ukm-item">UKM PSM</div>
        <div class="ukm-item">UKM LPIK</div>
        <div class="ukm-item">UKM MAHAPEKA</div>
        <div class="ukm-item">UKM PERBAMA</div>
        <div class="ukm-item">UKM PS GAHAKI</div>
        <div class="ukm-item">UKM PSKM</div>
        <div class="ukm-item">UKM PUPQ</div>
        <div class="ukm-item">UKM LPM SUAKA</div>
        <div class="ukm-item">UKM KSR PMI</div>
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

