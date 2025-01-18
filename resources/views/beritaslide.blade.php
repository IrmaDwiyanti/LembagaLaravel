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
    
    <link rel="icon" href="images/logoset.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <!-- Navbar -->
  @include('components.navbarview')


  <!--content-->
  <!-- Berita Terbaru -->
<div class="containerbs">
  <div class="judulbs">Berita-berita</div>
  <div class="news-gridbs">
      @foreach ($berita_terbaru as $item)
          <div class="news-itembs">
              <a href="{{ url('contentberita/' . $item->slug) }}">
                  <img alt="Image" height="200" src="{{ asset('storage/' . $item->image) }}" width="300"/>
                  <div class="news-contentbs">
                      <div class="news-titlebs">
                          {{ $item->title ?? 'Judul tidak tersedia' }}
                      </div>
                      <div class="news-metabs">
                        <strong>{{ $item->author ?? 'Penulis tidak tersedia' }}</strong> | 
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