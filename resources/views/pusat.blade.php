<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusat-Pusat</title>
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
        <span>PUSAT - PUSAT</span>
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
    <div class="contentpusat">
        <img alt="Meeting room with people sitting and a presentation screen" src="https://storage.googleapis.com/a1aa/image/TAGUnlq6mOIeVCbulbyQ93ehTwthq1vuDAFOvN7WJ2UFESoTA.jpg"/>
        <h1>
         Pusat UIN Sunan Gunung Djati Bandung
        </h1>
        <p>
            Berbagai pusat di universitas memiliki peran strategis dalam mendukung kegiatan akademik dan pengembangan universitas, 
            termasuk Pusat Perpustakaan yang menyediakan koleksi buku dan sumber daya digital, Pusat Teknologi Informasi dan Pangkalan 
            Data (PTIPD) mengelola teknologi serta sistem informasi, dan Pusat Hukum dan Perundang-undangan yang memberikan dukungan hukum 
            serta konsultasi. Pusat Karir dan Kewirausahaan berfokus pada pengembangan karir dan kewirausahaan mahasiswa, sementara Pusat 
            Pengembangan Bisnis mendukung program bisnis dan kemitraan, Pusat Halal melakukan penelitian dan sertifikasi produk halal, 
            serta Pusat Pengembangan Bahasa menawarkan program peningkatan kemampuan bahasa asing.</p>
       </div>
       <div class="containerisi">
        <div class="section-title">
         Pusat - Pusat
        </div>
        <div class="divider">
        </div>
        <div class="grid-container">
         <div class="grid-item">
            <img alt="Library building" src="{{ asset('images/Perpus.jpg') }}"/>
            <p>Pusat Perpustakaan</p>
         </div>
         <div class="grid-item">
            <img alt="Information and Data Center building" src="{{ asset('images/Ptipd.jpg') }}"/>
            <p>Pusat Teknologi Informasi dan Pangkalan Data</p>
         </div>
         <div class="grid-item">
            <img alt="International Office building" src="{{ asset('images/8.jpg') }} "/>
            <p>Pusat International Office</p>
         </div>
         <div class="grid-item">
            <img alt="Law and Legislation Center building" src="{{ asset('images/Kopertais.jpg') }} "/>
            <p>Pusat Hukum dan Perundang-undangan</p>
         </div>
         <div class="grid-item">
            <img alt="Career and Entrepreneurship Center building" src="{{ asset('images/Kopertais.jpg') }} "/>
            <p>Pusat Karir Kewirausahaan</p>
         </div>
         <div class="grid-item">
            <img alt="Business Development Center building" src="{{ asset('images/Bisnis Center.jpg') }} "/>
            <p>Pusat Pengembangan Bisnis</p>
         </div>
         <div class="grid-item">
            <img alt="Halal Center building" src="{{ asset('images/Bisnis Center.jpg') }} "/>
            <p>Pusat Halal</p>
         </div>
         <div class="grid-item">
            <img alt="Language Development Center building" src="{{ asset('images/Lab Halal.jpg') }} "/>
            <p>Pusat Pengembangan Bahasa</p>
         </div>
         <div class="grid-item">
            <img alt="New Student Admission Center building" src="{{ asset('images/Lab Bahasa.jpg') }} "/>
            <p>Pusat Penerimaan Mahasiswa Baru</p>
         </div>
         <div class="grid-item">
            <img alt="Pusat Penelitian dan Penertiban (PUSLITPEN)" src="{{ asset('images/Lembaga p2m.jpg') }} "/>
            <p>Pusat Penelitian dan Penertiban (PUSLITPEN)</p>
         </div>
         <div class="grid-item">
            <img alt="Language Development Center building" src="{{ asset('images/Ptipd.jpg') }} "/>
            <p>Pusat Pengabdian Kepada Masyarakat (PKM)</p>
         </div>
         <div class="grid-item">
            <img alt="New Student Admission Center building" src="{{ asset('images/Lab Bahasa.jpg') }} "/>
            <p>Pusat Studi Gender dan Anak (PSGA)</p>
         </div>
         <div class="grid-item">
            <img alt="New Student Admission Center building" src="{{ asset('images/Ppg.jpg') }} "/>
            <p>Pusat Pengembangan Standar Mutu</p>
         </div>
         <div class="grid-item">
            <img alt="Halal Center building" src="{{ asset('images/Riset perdana.jpg') }} "/>
            <p>Pusat Audit dan Pengendalian Mutu</p>
         </div>
         <div class="grid-item">
            <img alt="Language Development Center building" src="{{ asset('images/Mipa.jpg') }} "/>
            <p>Pusat DP-DIKTA</p>
         </div>
         <div class="grid-item">
            <img alt="New Student Admission Center building" src="{{ asset('images/Unit Layanan.jpg') }} "/>
            <p>Pusat Akreditasi Internasional</p>
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