<x-guest-layout>

    
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">
  
        <div class="container">
          <h2 data-aos="fade-up" data-aos-delay="100" class="">We Are Raising Leaders <br>That Will Influence The <br>World Positively</h2>
          <p data-aos="fade-up" data-aos-delay="200">And we are happy to have you here</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('#')}}" class="btn-get-started">Live Stream</a>
          </div>
        </div>
  
      </section><!-- /Hero Section -->
  
      <!-- About Section -->
      <section id="about" class="about section">
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
              <h3>What is It Like At New Wine Youth Church?</h3>
              <p class="fst-italic">
                By the grace of God, we are a tight-knit community of happy people who love God, and embrace anyone who decides to join us.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Driven by our mandate to raise leaders that will influence the world positively, we inspire one another to strive for Godly excellence in the church, home, marketplace and in our personal lives.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>We are the remnant </span></li>
                <li><i class="bi bi-check-circle"></i> <span>We do this with love and empathy, to ensure that every member and visitor feels welcome and inspired, and has a sense of belonging.</span></li>
              </ul>
              <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /About Section -->

        <!-- Stats About Section -->
      <x-stats />
      <!-- /Stats About Section -->
       

         <!-- Popular Sermons -->
        <section id="courses" class="courses section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Sermons</h2>
            <p class="">Popular Sermons</p>
            </div><!-- End Section Title -->
    
           <x-sermons />
  
         </section><!-- /Sermon Section -->
</x-guest-layout>