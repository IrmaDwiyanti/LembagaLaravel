<!DOCTYPE html>
<html lang="id">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>{{__('message.tittleheader')}}</title>
    <link rel="icon" href="images/logoset.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

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
                     <li class="scroll-to-section"><a href="pusat" class="active">{{__('message.menu.pusatlang')}}</a></li>
                     <li class="scroll-to-section"><a href="beritaslide">{{__('message.menu.beritalang')}}</a></li>
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

  <!-- ***** Banner Area Start ***** -->
   <div class="main-bannerpusat" id="top">
      <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="owl-carousel owl-banner">
            <div class="itempusat item-1pusat">
               <div class="header-textpusat">
                  <h2>{{__('message.bannerpusat.tittle')}}</h2>
                  <p>{{__('message.bannerpusat.description')}}
                  </p>
               </div>
            </div>
            </div>
         </div>
      </div>
      </div>
   </div>
   <!-- ***** Fun-Facts Background ***** -->
   <div class="fun-factspusat"></div>
   <!-- ***** Banner Area End ***** -->

  <!-- ***** Pusat Pusat List Start ***** -->
   <section class="section courses" id="courses">
      <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <div class="section-headingpusat">
            <h2>{{__('message.tittleheader')}}</h2>
            </div>
         </div>
      </div>
   
      <div class="row event_box">
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.ptipd') }}" src="{{ asset('images/Ptipd.jpg') }}" class="event-img"/></a>
            </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ptipd') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.pio') }}" src="{{ asset('images/8.jpg') }}" class="event-img"/></a>
            </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pio') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.phpl') }}" src="{{ asset('images/10.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.phpl') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.pkuk') }}" src="{{ asset('images/Kopertais.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pkuk') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
              <a href="#"><img alt="{{ __('message.pusatlist.pp') }}" src="{{ asset('images/perpustakaan.jpg') }}" class="event-img"/></a>
            </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pp') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.ppbi') }}" src="{{ asset('images/Bisnis Center.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ppbi') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
                <a href="#"><img alt="{{ __('message.pusatlist.ph') }}" src="{{ asset('images/Lab Halal.jpg') }}" class="event-img"/></a></div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ph') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.ppba') }}" src="{{ asset('images/Lab Bahasa.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ppba') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
              <a href="#"><img alt="{{ __('message.pusatlist.ppm') }}" src="{{ asset('images/Lab.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ppm') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.puslitpen') }}" src="{{ asset('images/Lembaga p2m.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.puslitpen') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
              <a href="#"><img alt="{{ __('message.pusatlist.ppsm') }}" src="{{ asset('images/Ppg.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.ppsm') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.pgsa') }}" src="{{ asset('images/Lembaga p2m.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pgsa') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
              <a href="#"><img alt="{{ __('message.pusatlist.pasm') }}" src="{{ asset('images/Riset perdana.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pasm') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.pkm') }}" src="{{ asset('images/Lembaga p2m.jpg') }} " class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pkm') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.dpd') }}" src="{{ asset('images/Mipa.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.dpd') }}</h4>
            </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 align-self-center mb-30 event_outer col-md-6" style="margin-bottom: 20px;">
            <div class="events_item">
            <div class="thumb">
               <a href="#"><img alt="{{ __('message.pusatlist.pai') }}" src="{{ asset('images/Unit Layanan.jpg') }}" class="event-img"/></a> </div>
            <div class="down-content">
               <h4>{{ __('message.pusatlist.pai') }}</h4>
            </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <!-- ***** Pusat Pusat List End ***** -->

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