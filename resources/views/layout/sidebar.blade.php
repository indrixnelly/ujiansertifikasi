<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
      var navbarStyle = localStorage.getItem("navbarStyle");
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="d-flex align-items-center">
      <div class="toggle-icon-wrapper">
        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      </div><a class="navbar-brand" href="/dashboard">
        <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('assets/img/logo.png') }}" alt="" width="40" /><span class="font-sans-serif"></span>
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages--><a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Data
              </div>
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div>
            <a class="nav-link {{ Request::is('history*') || Request::is('komentar*') ? 'active' : '' }}" href="/history" role="button" aria-expanded="false">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Riwayat Proyek</span>
              </div>
            </a>
            <a class="nav-link {{ Request::is('pengguna*') ? 'active' : '' }}" href="/pengguna" role="button" aria-expanded="false">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Pengguna</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>