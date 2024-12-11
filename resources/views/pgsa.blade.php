<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIN Sunan Gunung Djati Bandung</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>

    <link rel="icon" href="images/logoset.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">

    <title>PKM UIN</title>
</head>
<body>
    <!--header-->
    <div class="header">
        <span>PUSLITPEN</span>
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
    
    <!--content-->
<div class="sectionpusatps">
    <div class="cardpusatps">
        <div class="pusatpsheader">
            <div class="logo-containerpusatps">
                <img src="/images/Logo UIN.png" alt="Logo UIN">
            </div>
            <div class="header-text">
                <div class="titlepusatps">
                    <h5>PUSLITPEN</h5>
                    <h6>Pusat Studi Gender dan Anak</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sectionpusatps">
    <div class="content-boxpusatps">
        <div class="content-headerpusatps">
            <h2>PROFIL</h2>
        </div>
        <div class="content-bodypusatps">
            <div class="image-boxpusatps">
                <img src="/images/8.jpg" alt="Group Image">
            </div>
            <div class="descriptionpusatps">
                Tugas pokok PSGA UIN Bandung mengacu pada Tri Dharma Perguruan Tinggi yaitu melakukan kegiatan 
                penelitian, pengabdian dan pendidikan. Ketiga kegiatan tri Dharma perguruan tinggi itu mengintegrasikan 
                nilai-nilai dan kegiatan gender dan anak. Bidang penelitian, termasuk di dalamnya kegiatan kajian dari 
                hasil penelitian, mengangkat isue dan tema gender dan anak yang ditinjau dari berbagai perspektif dan 
                disiplin ilmu. Hasil kegiatan kajian dan penelitian itu selanjutnya disebarkan (diseminasi) dalam bentuk 
                karya tulis melalui media buku, jurnal dan media akademik lainnya, sehingga hasil kajian dan penelitian itu 
                dapat tersosialisasi secara luas dan dimanfaatkan oleh berbagai kalangan.
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