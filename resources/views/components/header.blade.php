<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="." class="logo d-flex align-items-center me-auto " style="">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
          <img src="{{asset('assets/img/people/new-wine-logo-black.png')}}"
               style="width: 80px; height: 100px"
               alt="Logo"
               data-aos="fade-in"
          >
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('sermons') }}" class="{{ Route::is('sermons') ? 'active' : '' }}">Sermons</a></li>
            <li><a href="{{ route('join-us.index') }}" class="{{ Route::is('join-us.index') ? 'active' : '' }}">Join the Family</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('live')}}">Join Us Live</a>

    </div>
  </header>
