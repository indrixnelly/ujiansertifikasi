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
    <!-- Font Awesome CSS (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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

    .comment-section {
      display: grid;
      grid-template-columns: 1fr;
      gap: 10px;
      max-height: 300px;
      overflow-y: auto;
    }

    .comment {
      display: flex;
      flex-direction: column;
      border: 1px solid #EA752C;
      padding: 10px;
      border-radius: 5px;
      justify-content: space-between;
    }

    .comment p {
      margin: 0;
    }

    .comment-actions {
      align-self: flex-end;
      height: 25px;
    }

    .btn-edit, .btn-delete {
      color: #EA752C;
      padding: 5px 10px;
      cursor: pointer;
      margin-right: 5px;
      text-decoration: none;
      border: none;
      background-color: transparent;
      font-weight: bold;
    }

    .btn-edit:hover,
    .btn-delete:hover {
        color: #000000;
    }
    
    .btn-for-comment {
      background-color: transparent;
      border: 2px solid;
      border-radius: 20px;
      padding: 6px;
    }

    .btn-for-comment:hover {
      color: #888888 !important;
      background-color: transparent;
      border: 2px solid #888888;
    }

    .size-text {
      font-size: 25px;
      color: black;
    }
  </style>
  <body>
    <!-- Header Start -->
    <header id="dashboard">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-dark">
        <div class="container">          
          <a class="navbar-brand" href="/"><img src="{{ asset('lp/img/logo.png') }}" alt="Logo Asa Widiantara" height="40" width="40"></span>CV.ASAWIDIANTARA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#home">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/#about">Tentang</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/#services">Layanan & Jasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/#clients">Klien</a>
            </li>                     
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">Riwayat Proyek</a>
            </li>            
            <li class="nav-item" id="submenu-item">
              <a class="nav-link page-scroll" href="/#contact">Hubungi</a>
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
    </header>
    <!-- Header Finish -->

    <!-- Content Start -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-header">          
                <h2 class="section-title">Konstruksi Bangunan Sipil Elektrical</h2>
                <span>Konstruksi Bangunan Sipil Elektrical</span><br><br>
                <img src="{{ asset('lp/img/g1.jpg') }}" alt="Foto" width="400">
            </div>
            <div class="container marketing">
                <div class="row featurette">
                    <div class="col-md-12">
                        <!-- deskripsi -->
                        <b class="size-text mb-2">Deskripsi</b>
                        <p class="justify-content-between teks">Kami menyediakan layanan konstruksi bangunan sipil elektrikal yang mencakup pembangunan infrastruktur listrik untuk 
                          proyek sipil seperti jembatan, jalan, dan fasilitas umum lainnya. Kami berkomitmen untuk memberikan hasil yang handal 
                          dan tahan lama dengan memanfaatkan teknologi terbaru dan standar keselamatan yang ketat.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Finish -->

    <!-- Footer Start -->
    <footer>
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="{{ asset('lp/img/logo.png') }}" alt="">
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
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Hubungi Kami</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Alamat</strong> <span>Perumahan Graha Indah Mandiri No. 81, Desa/ Kelurahan Namo Mbelin, Kec. Namorambe, Kab. Deli Serdang, Provinsi Sumatera Utara</span>
                  </li>
                  <li>
                    <strong>HP</strong> <span>+6213 7070 8716</span>
                  </li>
                  <li>
                    <strong>E-mail</strong> <span><a href="#">asawidiantara@gmail.com</a></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Galeri</h3>
                <ul class="instagram-footer">
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta1.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta2.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta3.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta4.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta5.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta6.jpeg') }}" alt=""></a></li>
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
    <!-- Footer Finish -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- Modal Edit Komentar | Mulai -->
    <div class="modal fade" id="editCommentModal" tabindex="-1" aria-labelledby="editCommentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editCommentForm" action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <b>Edit Komentar</b>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea class="form-control" id="editCommentTextarea" name="isi_komentar" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-common">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Model Edit Komentar | Selesai -->

    <!-- Modal Edit Pengguna | Mulai -->
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
    <!-- Modal Edit Pengguna | Selesai -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
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