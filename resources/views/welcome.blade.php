<style>
    .hero img{
        background-position: center!important;
    }
    /*#ef8c1f*/
</style>
<x-guest-layout>


    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img src="{{asset('assets/img/people/young-women-in-youth-church.jpg')}}" alt="" data-aos="fade-in">


        <div class="container">
          <h2 data-aos="fade-up" data-aos-delay="100" class="">We Are Raising Leaders <br>That Will Influence The <br>World Positively</h2>
          <p data-aos="fade-up" data-aos-delay="200">And we are happy to have you here</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{route('join-us.index')}}" class="btn-get-started">Join Us Live</a>
          </div>
        </div>

      </section><!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">

        <div class="container">

          <x-about-us />


          <x-what-it-like />

        </div>

      </section><!-- /About Section -->

        <!-- Stats About Section -->
{{--      <x-stats />--}}
      <!-- /Stats About Section -->

    <!-- Testimonials Section -->

    <x-testimonial :testimonials="$testimonials" />
    <!-- /Testimonials Section -->
         <!-- Popular Sermons -->
        <section id="courses" class="courses section">

            <!-- Section Title -->
            <div class="container my-5" data-aos="fade-up">
                <h2 class="text-center text-main-color">Recent Sermons</h2>
            </div>

           <x-sermons />

         </section><!-- /Sermon Section -->
</x-guest-layout>
