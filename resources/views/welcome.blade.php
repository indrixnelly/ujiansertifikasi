<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>CV. ASAWIDIANTARA</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/main.css') }}">    
    <link rel="stylesheet" href="{{ asset('lp/css/responsive.css') }}">

    <!-- Default Statcounter code for CV. Asa Widiantara http://127.0.0.1:8000/ -->
    <script type="text/javascript">
      var sc_project=13003837; 
      var sc_invisible=0; 
      var sc_security="aa9648cd"; 
      var scJsHost = "https://";
      document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
      "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <!-- End of Statcounter Code -->
  </head>
  <style>
        .teks {
          font-size: 17px;
          text-align: justify;
        }

        .teks-judul {
          font-size: 25px;
        }

        .judul {
          font-size: 20px;
        }

        .keterangan {
          font-size: 20px;
          text-align: center;
          padding-bottom: 25px;
        }

        .nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
        }

        .submenu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .submenu a {
            color: #333;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        #submenu-item:hover .submenu {
            display: block;
        }

        #submenu-item .submenu a:hover {
            background-color: #EA752C;
            color: white;
        }

        .custom-card {
            width: 100%;
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .custom-item {
            width: 100%;
            height: 170px;
            overflow: hidden;
            position: relative;
        }

        .custom-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .warna-tombol {
          background-color: #EA752C;
        }

        .warna-tombol:hover {
            background-color: #f35d00;
        }

        /* CSS untuk gaya ikon */
        .icon-container {
          text-align: center;
          margin-bottom: 20px; /* Menambahkan ruang antara ikon */
        }

        .icon-container img {
          border-radius: 50%;
          border: 2px solid #ffffff;
          transition: transform 0.3s ease-in-out;
        }

        .icon-container img:hover {
          transform: scale(1.1);
        }

        .icon-container span {
          display: block;
          margin-top: 5px;
          font-size: 14px;
        }
  </style>
  <body>
    <!-- Bagian Header | Mulai -->
    <header id="dashboard">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-dark">
        <div class="container">          
          <a class="navbar-brand" href="/"><img src="lp/img/logo.png" alt="Logo Asa Widiantara" height="40" width="40"></span>CV. ASAWIDIANTARA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#dashboard">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">Tentang</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Layanan & Jasa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#clients">Klien</a>
                </li>                   
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#blog">Riwayat Proyek</a>
                </li>
                <li class="nav-item" id="submenu-item">
                  <a class="nav-link page-scroll" href="#contact">Hubungi</a>
                </li>
                <li class="nav-item" id="submenu-item">
                    @if (Auth::check())
                        @if (Auth::user()->level === 'admin')
                          <a href="#" class="nav-link">{{ Auth::user()->username }}</a>
                          <div class="submenu">
                            <a href="/dashboard">Sistem Informasi</a>
                            <a href="#" id="edit-profil-btn">Edit Profil</a>
                            <a href="/keluar">Keluar</a>
                          </div>
                        @else
                          <a href="#" class="nav-link">{{ Auth::user()->username }}</a>
                          <div class="submenu">
                              <a href="#" id="edit-profil-btn">Edit Profil</a>
                              <a href="/keluar">Keluar</a>
                          </div>
                        @endif
                    @else
                      <a href="/login" class="nav-link">Login</a>
                    @endif
                </li>
            </ul>              
          </div>
        </div>
      </nav>
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="lp/img/slider/2.jpg" alt="" height="650" width="100%">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">SELAMAT DATANG DI </h1>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">CV. ASA WIDIANTARA</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">KLIK MULAI UNTUK MENELUSURI TENTANG KAMI!</h4>
                <a href="#about" class="btn btn-lg btn-border wow fadeInRight page-scroll" data-wow-delay="1.2s">Mulai</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="lp/img/slider/3.jpg" alt="" height="650" width="100%">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Kamu Mau Tahu</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Layanan & Jasa Kami</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s"></h4>
                <a href="#about" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">Yuk Lihat</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="lp/img/slider/1.jpg" alt="" height="650" width="100%">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Mari Lihat Juga</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Riwayat Proyek Kami</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"></h4>
                <a href="#blog" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">PERGI</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Kembali</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Lanjut</span>
          </a>
        </div>
      </div>  
    </header>
    <!-- Bagian Header | Selesai -->

    <!-- Bagian Tentang Kami | Mulai -->
    <section id="about" class="section" style="background-color:#f5f5f5">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Tentang Kami</h2>
            <span class="judul">Tentang Kami</span>
          </div><br><br>
          <div class="container marketing">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 teks-judul">Sejarah <span class="text-muted">Kami</span></h2>
                <p class="justify-content-between teks">CV Asa Widiantara, kontraktor utama di Indonesia, didirikan pada Oktober 2022. Kami ahli dalam proyek konstruksi komersial, menyediakan manajemen proyek di seluruh Republik Indonesia. Memberikan masukan desain dan solusi teknik, fokus kami adalah tepat waktu dan kualitas tinggi untuk kepuasan klien. Setiap proyek kami tangani dengan detail dan dedikasi, menciptakan mahakarya sesuai keinginan klien.</p>
              </div>
              <div class="col-md-5">
                <img src="{{ asset('lp/img/g1.jpg') }}" alt="" width="500" height="500"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                {{-- <h2 class="fw-normal lh-1">kontrak<span class="text-muted">tor</span></h2> --}}
                <p class="teks">CV Asa Widiantara didirikan pada Oktober 2022 sebagai kontrak nasional perusahaan yang menawarkan jasa konstruksi mengambil peran kontraktor utama. Sebagai salah satu bangsa Indonesia berskala besar kontraktor, CV Asa Widiantara memiliki kompetensi untuk mengerjakan proyek konstruksi struktural dan arsitektur bangunan  komersial dan melakukan manajemen proyek layanan untuk mengkoordinasikan perdagangan spesialis untuk proyek komersial/industri seluruh wilayah Republik Indonesia.
                    Kita juga memberikan masukan desain dan solusi teknik sebagai nilai tambah layanan kepada klien kami.Fokus pada ketepatan waktu untuk menyelesaikan tinggi proyek berkualitas untuk kepuasan klien. Kita memahami setiap klien memiliki kebutuhan khusus dan tujuan. Hal ini membuat setiap proyek unik; Jadi CV Asa Widiantara menangani setiap proyek dengan detail, dedikasi tinggi dan prioritas pada kualitas. Jadi hasil akhirnya adalah mahakarya, perwujudan keinginan klien kami.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img src="lp/img/g3.jpg" alt="" width="400" height="300"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row">
              <div class="col-md-7">
                <h1 class="teks-judul">Visi</h1>
                <p class="teks mb-4">Menjadi kontraktor nasional terkemuka dan menjadi pilihan utama para klien.</p>
                <h1 class="teks-judul">Misi</h1>
                <ol start="1">
                    <li class="teks">Memberikan kepuasan kepada klien melalui penyelesaian proyek yang berkualitas tinggi, sesuai dengan anggaran dan waktu yang telah disepakati.</li>
                    <li class="teks">Menjadi perusahaan yang professional kompeten dan kredibel.</li>
                    <li class="teks">Menjadi perusahaan konstruksi yang mampu berdaya saing global.</li>
                </ol>
              </div>
              <div class="col-md-5">
                <img src="lp/img/g2.jpg" alt="100" width="500" height="200"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
            <hr class="featurette-divider">
          </div>
        </div>
    </section>
    <!-- Bagian Tentang Kami | Selesai -->

            <!-- Bagian Sela-Sela | Mulai -->
            <section id="cta" class="section" data-stellar-background-ratio="0.5">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 col-md-6 col-xs-12">            
                    <div class="cta-text">
                      <h5> PERUSAHAAN KONSTRUKSI TERLENGKAP</h5>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Bagian Sela-Sela | Selesai -->

    <!-- Bagian Layanan & Jasa | Mulai -->
    <section id="services" class="section">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Layanan & Jasa</h2>
            <span>Layanan & Jasa</span>
          </div><br><br>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Konstruksi Gedung Hunian</h4></h4>
                <p><a href="/detail1"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
                <div class="icon color-2">
                  <i class="lni-cog"></i>
                </div>
                <h4>Instalasi Listrik & Mekanikal</h4>
                <p><a href="/detail2"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
                <div class="icon color-3">
                  <i class="lni-stats-up"></i>
                </div>
                <h4>Perdagangan Suku Cadang Elektronik</h4>
                <p><a href="/detail3"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
                <div class="icon color-4">
                  <i class="lni-layers"></i>
                </div>
                <h4>Konstruksi Bangunan Sipil Elektrical</h4>
                <p><a href="/detail4"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
                <div class="icon color-5">
                  <i class="lni-tab"></i>
                </div>
                <h4>Angkutan Bermotor Untuk Barang Umum</h4>
                <p><a href="/detail5"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
                <div class="icon color-6">
                  <i class="lni-briefcase"></i>
                </div>
                <h4>Perdagangan Besar Material Bangunan</h4>
                <p><a href="/detail6"><button class="warna-tombol btn mb-3">Detail</button></a></p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Bagian Layanan & Jasa | Selesai --> 

    <!-- Bagian Klien Kami | Mulai -->
    <div id="clients" class="section" style="background-color:#f5f5f5">
      <!-- Container Ends -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Klien Kami</h2>
          <span>Klien Kami</span><br><br>
        <!-- Row and Scroller Wrapper Starts -->
        <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="lp/img/client.png" alt="" width="100px">
          </div>
          <div class="client-item-wrapper">
            <img src="lp/img/client2.png" alt="" width="100px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bagian Klien Kami | Selesai -->

    <section id="blog" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Riwayat Proyek</h2>
          <span>Riwayat Proyek</span>
        </div><br><br>
        <div class="row">
          @foreach ($histories as $history)
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item mb-3">
              <div class="blog-item-wrapper">
                  <div class="blog-item-img">
                      <a href="{{ route('detail', ['id' => $history->id]) }}">
                          <div class="custom-card">
                              <img src="{{ asset('gambar/'.$history->foto) }}" alt="Riwayat Gambar" class="img-fluid custom-image">
                          </div>
                      </a>                
                  </div>
                  <div class="blog-item-text custom-item" > 
                  <div class="date"><i class="lni-calendar"></i>{{ \Carbon\Carbon::parse($history->tanggal)->format('d-m-Y') }}</div>
                      <h3><a href="{{ route('detail', ['id' => $history->id]) }}">{{ $history->nama }}</a></h3>
                      <div class="meta-tags">
                          <span>{{ $history->alamat }}</span>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-end">
        </div>
    </div>
    </section>
    <!-- Bagian Riwayat Proyek | Selesai -->

    <!-- Bagian Hubungi Kami | Mulai -->
    <section id="contact" class="section" style="background-color:#f5f5f5">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Hubungi Kami</h2>
          <span>Hubungi Kami</span>
        </div><br><br>
        <div class="row justify-content-center">
          <b class="keterangan">Jika ingin menggunakan layanan dan jasa kami atau ingin mengetahui informasi lebih lanjut, silahkan hubungi kami melalui WhatsApp atau E-mail di bawah ini!</b>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="https://wa.me/6283152647148"><div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <img src="gambar/logo-wa.png" width="25%" height="25%"></img>
              </div>
              <h4>WhatsApp</h4></h4>
            </div></a>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="https://mail.google.com/mail/?view=cm&to=asawidiantara@gmail.com"><div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <img src="gambar/logo-gmail.png" width="25%" height="25%" style="padding-top:25px"></img>
              </div>
              <h4 style="padding-bottom:10px">E-mail</h4>
            </div></a>
          </div>
        </div>
        <div class="d-flex justify-content-end">
        </div>
      </div>
    </section>
    <!-- Bagian Hubungi Kami | Selesai -->

    <!-- Bagian Footer | Mulai -->
    <footer>
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="lp/img/logo.png" alt="">
              <div class="textwidget">
                <p>CV Asa Widiantara handles every project
                  with detail, high dedication and priority on quality.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Halaman Telah Dikunjungi</h3>
                  <img
                  src="https://c.statcounter.com/13003837/0/aa9648cd/0/" alt="Total Pengunjung"
                  referrerPolicy="no-referrer-when-downgrade" width="8%" height="8%">
                <!-- angka total pengunjung -->
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Informasi</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Alamat </strong><span>Perumahan Graha Indah Mandiri No. 81, Desa/ Kelurahan Namo Mbelin, Kec. Namorambe, Kab. Deli Serdang, Provinsi Sumatera Utara</span>
                  </li>
                  <li>
                    <strong>HP </strong><span>+6213 7070 8716</span>
                  </li>
                  <li>
                    <strong>E-mail </strong><span><a href="#">asawidiantara@gmail.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Galeri</h3>
                <ul class="instagram-footer">
                  <li><a href="#"><img src="lp/img/instagram/insta1.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta2.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta3.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta4.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta5.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta6.jpeg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div id="copyright" style="background-color: #343a40;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p style="color:#ffffff">Dikembangkan oleh <a href="https://pcr.ac.id/" rel="nofollow" style="color:#EA752C">Politeknik Caltex Riau</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bagian Footer | Selesai -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- Modal Edit Pengguna -->
    <div class="modal fade" id="editProfilModal" tabindex="-1" aria-labelledby="editProfilModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="editProfilModalLabel"><b>Edit Profil</b></h6>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                @if (Auth::check())
                  <form id="editProfilForm" action="/pengguna/{{ Auth::user()->id }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="modal-body">
                          <div class="mb-3">
                              <label for="name" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                          </div>
                          <div class="mb-3">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}" required>
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password Baru</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm mb-3" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-common btn-sm mb-3">Perbarui</button>
                      </div>
                  </form>
                @else
                  <div>Tidak Ada!</div>
                @endif
            </div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('lp/js/jquery-min.js') }}"></script>
    <script src="{{ asset('lp/js/popper.min.js') }}"></script>
    <script src="{{ asset('lp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lp/js/classie.js') }}"></script>
    <script src="{{ asset('lp/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('lp/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('lp/js/owl.carousel.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.stellar.min.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.nav.js') }}"></script>    
    <script src="{{ asset('lp/js/scrolling-nav.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.easing.min.js') }}"></script>     
    <script src="{{ asset('lp/js/wow.js') }}"></script> 
    <script src="{{ asset('lp/js/jquery.vide.js') }}"></script>
    <script src="{{ asset('lp/js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.magnific-popup.min.js') }}"></script>    
    <script src="{{ asset('lp/js/waypoints.min.js') }}"></script>    
    <script src="{{ asset('lp/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('lp/js/contact-form-script.js') }}"></script>   
    <script src="{{ asset('lp/js/main.js') }}"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RPHTBPBGNL"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          document.getElementById('edit-profil-btn').addEventListener('click', function() {
              let editProfilModal = new bootstrap.Modal(document.getElementById('editProfilModal'));
              editProfilModal.show();
          });
      });
    </script>
  </body>
</html>