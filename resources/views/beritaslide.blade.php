<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Lembaga</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <div class="header">
      <span>BERITA</span>
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
  <!-- Berita Terbaru -->
<div class="containerbs">
  <div class="judulbs">Berita-berita</div>
  <div class="news-gridbs">
      @foreach ($berita_terbaru as $item)
          <div class="news-itembs">
              <a href="{{ url('contentberita/' . $item->id) }}">
                  <img alt="Image" height="200" src="{{ asset('storage/' . $item->image) }}" width="300"/>
                  <div class="news-contentbs">
                      <div class="news-titlebs">
                          {{ $item->title ?? 'Judul tidak tersedia' }}
                      </div>
                      <div class="news-metabs">
                          {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                      </div>
                  </div>
              </a>
          </div>
      @endforeach
  </div>

  <!-- Pagination -->
  <div class="paginationbs">
      {{ $berita_terbaru->links('pagination::bootstrap-5') }}
  </div>
</div>

<!--<div class="containerbs">
    <div class="judulbs">Berita-berita</div>
    <div class="news-gridbs">
      <div class="news-itembs">
        <a href="contentberita">
          <img alt="Three people standing and smiling" height="200" src="/images/berita1.png" width="300"/>
          <div class="news-contentbs">
            <div class="news-titlebs">
              Diseminasi Isu-isu Gender melalui Konferensi PSGA ke-3 dan Peran Strategis PSGA di PTKI
            </div>
            <div class="news-metabs">
              16/10/2024
            </div>
          </div>
        </a>
      </div>
  
      <div class="news-itembs">
        <a href="contentberita">
          <img alt="Two people standing on a stage with a banner in the background" height="200" src="/images/berita1.png" width="300"/>
          <div class="news-contentbs">
            <div class="news-titlebs">
              Workshop Kurikulum Berperspektif Gender PSGA LP2M UIN SGD Bandung
            </div>
            <div class="news-metabs">
              17/09/2024
            </div>
          </div>
        </a>
      </div>
  
      <div class="news-itembs">
        <a href="contentberita">
          <img alt="Two people standing on a stage with a banner in the background" height="200" src="/images/berita4.png" width="300"/>
          <div class="news-contentbs">
            <div class="news-titlebs">
              Desa Cikuya - Menjaga Tradisi, Membangun Masa Depan
            </div>
            <div class="news-metabs">
              06/09/2024
            </div>
          </div>
        </a>
      </div>
  
      <div class="news-itembs">
        <a href="contentberita">
          <img alt="Two people standing on a stage with a banner in the background" height="200" src="/images/berita4.png" width="300"/>
          <div class="news-contentbs">
            <div class="news-titlebs">
              Sosialisasi ke masyarakat, Peserta KKN-MB Desa Babakanmulya Gelar Kegiatan Rembuk Warga
            </div>
            <div class="news-metabs">
              16/08/2024
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  

   <div class="paginationbs">
    <a class="active" href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">
     ...
    </a>
    <a href="#">11</a>
    <a href="#">&gt;</a>
   </div>
  </div>-->
           
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