
  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li>
            <a href="mailto:info@homeverse.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>

              <span>yayasanmentari@gmail.com</span>
            </a>
          </li>

          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="location-outline"></ion-icon>

              <address>15/A, Nest Tower, NYC</address>
            </a>
          </li>

        </ul>

        <div class="wrapper">
         

        @guest
          @if (Route::has('login'))
          <a class="header-top-btn" href="{{ route('login') }}">Login</a>
          @endif
          @if (Route::has('register'))
          <a class="header-top-btn" href="{{ route('register') }}">Register</a>
          @endif
          @else
          <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle header-top-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
       Helo, {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @role('admin|penulis')
        <a class="dropdown-item" href="/dashboard">Dashboard</a>
        @endrole
                                  
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>

          @endguest
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img img src="/upload/logo/{{$logo->gambar}}" width="250px" height="40px">
        </a>

        <nav class="navbars" data-navbar>

          <div class="navbars-top">

            <a href="#" class="logo">
              <img src="/upload/logo/{{$logo->gambar}} " width="100px" height="70px">
            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbars-bottom">
            <ul class="navbars-list">

            <li class="dropdown">
    <a href="/" class="navbars-link @yield('home')" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beranda </a>
    <ul class="dropdown-menu">
        <li><a href="/">Beranda</a></li>
        <li><a href="#">Dropdown Item 1</a></li>
        <li><a href="#">Dropdown Item 2</a></li>
        <li><a href="#">Dropdown Item 3</a></li>
    </ul>
</li>



              <li>
                <a href="#tentang" class="navbars-link" data-nav-link>Tentang</a>
              </li>

              <li>
                <a href="#support" class="navbars-link" data-nav-link>Support</a>
              </li>

              <li>
                <a href="#tim" class="navbars-link" data-nav-link>Tim</a>
              </li>

              <li>
                <a href="#berita" class="navbars-link" data-nav-link>Berita</a>
              </li>

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

          
          <button class="header-bottom-actions-btn" aria-label="Cart">
          <ion-icon name="person-outline"></ion-icon>

            <span>Profile</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Cart">
          <ion-icon name="chatbox-ellipses-outline"></ion-icon>

            <span>Report</span>
          </button>

          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>

            <span>Menu</span>
          </button>

        </div>

      </div>
    </div>

  </header>

 

    