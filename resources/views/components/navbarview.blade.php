<div class="header">
    <span>Jam layanan : 07.00 - 16.00</span>
    <div class="menu-bars" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </div>
    <div class="nav-links">
        <a href="{{ url('home') }}">HOME</a>
        <a href="{{ url('pusat') }}">PUSAT</a>
        <a href="{{ url('ukm') }}">UKM</a>
        <a href="{{ url('beritaslide') }}">BERITA</a>
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
        <div class="auth-links">
            <a href="{{ url('login') }}">Login</a>
            <a href="{{ url('register') }}">Register</a>
        </div>
    </div>
   
</div>


