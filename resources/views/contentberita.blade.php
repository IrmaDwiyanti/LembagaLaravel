<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>News - Lembaga</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Elsie&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
    
    <link rel="icon" href="images/logoset.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>
    <!--header-->
    <!-- Navbar -->
  @include('components.navbarview')

    <!-- Headline Section -->
<!-- Headline Section -->
<div class="py-4">
    <div class="p-4" style="background-color: rgba(47, 170, 47, 0.32);">
        <div class="col-6 headline">
            <h4>{{ $berita->title ?? 'Judul tidak tersedia' }}</h4>
            <span>
                <!-- Menambahkan Author sebelum tanggal -->
                <strong>{{ $berita->author ?? 'Penulis tidak tersedia' }}</strong> | 
                {{ $berita->date ? \Carbon\Carbon::parse($berita->date)->format('l, d/m/Y') : 'Tanggal tidak tersedia' }}
            </span>
        </div>
    </div>
</div>


<!-- Main Content Wrapper -->
<div class="content-wrappercb">
    <!-- Main Content -->
    <div class="main-contentcb">
        <img 
                src="{{ $berita->image ? asset('storage/' . $berita->image) : asset('images/default.jpg') }}" 
                alt="{{ $berita->title ?? 'Gambar berita' }}" 
                width="400" 
                height="200" 
            />
        <div class="mt-5">
                <p>
                    {!! $berita->content ?? 'Konten tidak tersedia' !!}
                </p>
            </div>
    </div>
    
    <!-- Sidebar Berita Terbaru -->
    <div class="sidebarcb">
        <h4>Berita Terbaru</h4>
        @foreach ($berita_terbaru as $item)
            <div class="cbnews-item">
                @if ($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" height="80" />
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Image" height="80" />
                @endif
                <a href="{{ url('contentberita/' . $item->slug) }}">
                    <div>
                        <p class="title">{{ $item->title ?? 'Judul tidak tersedia' }}</p>
                        <div class="date">
                            <strong>{{ $item->author ?? 'Penulis tidak tersedia' }}</strong> | 
                            {{ $item->date ? \Carbon\Carbon::parse($item->date)->format('d/m/Y') : 'Tanggal tidak tersedia' }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        <a class="read-more" href="{{ url('beritaslide') }}">
            Berita Selengkapnya
            <i class="fas fa-arrow-right"></i>
          </a>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <img src="{{ asset('images/logo.png') }}" alt="Logo UIN"/>
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
