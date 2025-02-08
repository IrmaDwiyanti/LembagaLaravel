<!DOCTYPE html>
<html lang="id">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>{{__('message.tittleberitaslide')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="vendorBoostrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a class="logo">
                      <img src="/images/logo.png" alt="Logo" class="logo-image">
                      <h1>LP2M</h1>
                    </a>
                    <div class="service-hours">
                        <span>{{__('message.jam')}}</span>
                    </div>
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="home">{{__('message.menu.homelang')}}</a></li>
                      <li class="scroll-to-section"><a href="pusat">{{__('message.menu.pusatlang')}}</a></li>
                      <li class="scroll-to-section"><a href="beritaslide" class="active">{{__('message.menu.beritalang')}}</a></li>
                      <li class="scroll-to-section dropdown">
                        <a href="#events">{{__('message.menu.fakultas')}} <i class="fa fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="https://fah.uinsgd.ac.id/">{{ __('message.fakultas.fah') }}</a></li>
                          <li><a href="https://fdk.uinsgd.ac.id/">{{ __('message.fakultas.fdk') }}</a></li>
                          <li><a href="https://febi.uinsgd.ac.id/">{{ __('message.fakultas.febi') }}</a></li>
                          <li><a href="https://fisip.uinsgd.ac.id/">{{ __('message.fakultas.fisip') }}</a></li>
                          <li><a href="https://psi.uinsgd.ac.id/">{{ __('message.fakultas.psi') }}</a></li>
                          <li><a href="https://fst.uinsgd.ac.id/">{{ __('message.fakultas.fst') }}</a></li>
                          <li><a href="https://fsh.uinsgd.ac.id/">{{ __('message.fakultas.fsh') }}</a></li>
                          <li><a href="https://ftk.uinsgd.ac.id/">{{ __('message.fakultas.ftk') }}</a></li>
                          <li><a href="https://fu.uinsgd.ac.id/">{{ __('message.fakultas.fu') }}</a></li>
                        </ul>
                      </li>
                      
                      <!-- Dropdown Pilihan Bahasa -->
                      <li class="dropdown language-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          {{ app()->getLocale() == 'id' ? 'Bahasa' : (app()->getLocale() == 'en' ? 'English' : 'العربية') }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ route('langChange', ['lang' => 'id']) }}">Indonesia</a></li>
                          <li><a href="{{ route('langChange', ['lang' => 'en']) }}">English</a></li>
                          <li><a href="{{ route('langChange', ['lang' => 'ar']) }}">العربية</a></li>
                        </ul>
                      </li>
                      
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
  <!-- ***** Header Area End ***** -->

<!-- ***** Berita Terbaru ***** -->
<section class="containerbs">
    <div class="judulbs text-center mb-4">
      <h2>{{__('message.tittleberitaslide')}}</h2>
    </div>
    <div class="news-gridbs">
        @foreach ($berita_terbaru as $item)
        <div class="news-itembs">
            <a href="{{ url('contentberita/' . $item->slug) }}">
                <div class="news-imagebs">
                    <img alt="Image" height="200" src="{{ asset('storage/' . $item->image) }}" width="300"/>
                </div>
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
<div class="paginationbs text-center mt-4">
    <ul class="pagination">
        {{ $berita_terbaru->links('pagination::bootstrap-5') }}
    </ul>
</div>
</section>
           
<!-- ***** Footer start ***** -->
  <footer class="footer">
    <div class="footer-left">
      <img src="/images/logo.png" alt="Logo UIN" />
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
      <p>Email: <a href="mailto:lp2m@uinsgd.ac.id">lp2m@uinsgd.ac.id</a></p>
      <p>(022) 7800525</p>
    </div>
  </footer>
   <!-- ***** Footer start End ***** -->
 
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendorBoostrap/jquery/jquery.min.js"></script>
  <script src="vendorBoostrap/bootstrap/js/bootstrap.min.js"></script>
  <script src="/js/isotope.min.js"></script>
  <script src="/js/owl-carousel.js"></script>
  <script src="/js/counter.js"></script>
  <script src="/js/custom.js"></script>
   </body>
 </html>