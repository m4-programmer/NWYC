<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'New Wine Youth Church') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css">

        <!-- Main CSS File -->
        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    </head>
    <body class="">

        <x-header />

        <main class="main">
            {{ $slot }}
        </main>

        <footer id="footer" class="footer position-relative">

            <div class="container footer-top">
              <div class="row gy-4">
                <div class="col-lg-6 col-md-6 footer-about" >
                  <a href="." class="logo d-flex align-items-center">
                    <span class="">{{config('app.name')}}</span>
                  </a>
                  <div class="footer-contact pt-3">
                    <p>RCCG New Wine Youth Church <br>

                        26b, Babs Animashaun Street, <br>

                        By Bode Thomass Junction, <br>

                        Surulere, Lagos, Nigeria.</p>
                  </div>

                </div>

                  <div class="col-md-6 col-6 " >

                      <p class="mt-3"><strong>Phone:</strong> <span>+234 7088324246</span></p>
                      <p><strong>Email:</strong> <span>newwineyouthchurch@gmail.com</span></p>

                      <div class="social-links d-flex mt-4">
                          <a href="https://facebook.com/rccgnuwine"><i class="bi bi-facebook"></i></a>
                          <a href="https://instagram.com/newwineyouthchurch"><i class="bi bi-instagram"></i></a>
                          <a href="https://youtube.com/@newwineyouthchurch"><i class="bi bi-youtube"></i></a>
                      </div>
                  </div>



                {{--<div class="col-lg-6 col-md-12 footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                  <form action="#" method="post" class="php-email-form">
                     @csrf
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                  </form>
                </div>--}}

              </div>
            </div>

            <div class="container copyright text-center mt-4">
              <p>© <span>Copyright</span> <strong class="px-1">{{config('app.name')}}</strong> <span>All Rights Reserved</span></p>
              <div class="credits">
                Designed by <a href="#">WinePress</a>
              </div>
            </div>

          </footer>

         <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{--        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>--}}
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>

        <!-- Main JS File -->
        <script src="{{asset("assets/js/main.js")}}"></script>
        <script>
            @if(session('error'))
            Swal.fire({
                title: 'Error!',
                text: '{{session('error')}}',
                icon: 'error',
                confirmButtonText: 'Okay'
            })
            @endif
            @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{session('success')}}',
                icon: 'success',
                confirmButtonText: 'Okay'
            })
            @endif
        </script>
    </body>
</html>
