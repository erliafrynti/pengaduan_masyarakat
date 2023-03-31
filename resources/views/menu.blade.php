<ul class="navbar-nav">
  @if (auth()->user()->level == 'user')
    <li class="nav-item">
      <a class="nav-link" href="/pengaduan/create">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <svg class="text-dark" width="16px" height="16px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>customer-support</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="customer-support" transform="translate(1.000000, 0.000000)"> <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" id="Path" opacity="0.59858631"></path> <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z" id="Path"></path> <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path> </g> </g> </g> </g> </svg>
      
        </div>
        <span class="nav-link-text ms-1">PENGADUAN </span>
      </a>
    </li>
@endif
    <!-- <li class="nav-item">
      <a class="nav-link " href="/pengaduan/create">
        <div class="icon icon-shape  icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">PENGADUAN</span>
      </a>
    </li> -->
    @if (auth()->user()->level == 'admin' || auth()->user()->level == 'petugas' )
    <li class="nav-item">
      <a class="nav-link " href="/pengaduan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">TANGGAPAN</span>
      </a>
    </li>
    @endif
    <!-- @if (auth()->user()->level == 'user')

    <li class="nav-item">
      <a class="nav-link " href="/laporan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">LAPORAN</span>
      </a>
    </li>
    @endif -->  
    @if (auth()->user()->level == 'admin')
    <li class="nav-item">
      <a class="nav-link " href="/cetak" target="_blank">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">LAPORAN PENGADUAN</span>
      </a>
    </li>
    @endif
    <!-- <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
    </li> -->
    @if (auth()->user()->level == 'admin'||'petugas')
    <li class="nav-item">
        <a class="nav-link " href="/logout">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-bold-left text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Logout</span>
        </a>
      </li>
    @endif
    <!-- <li class="nav-item">
      <a class="nav-link " href="../pages/sign-in.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign In</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="../pages/sign-up.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-collection text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign Up</span>
      </a> -->
    </li>
</ul>
