<x-guest-layout>

    <x-page-title
        title="So Closely Knitted Into One..."
        text="We can’t wait to have you join our family! ​God’s plan is for you to lead a life of positive ​influence, and we would love to be a part of ​that wonderful life."
        current="Join Us"
        image="assets/img/people/about.jpeg"
    />

    <!-- Contact Section -->
    <section id="contact" class="contact section">


        <div class="container my-5" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>
                    RCCG New Wine Youth Church <br>

                    26b, Babs Animashaun Street, <br>

                    By Bode Thomass Junction, <br>

                    Surulere, Lagos, Nigeria.
                </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+234 7088324246</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>newwineyouthchurch@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
              <form action="{{route('join-us.store')}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  @csrf
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="last_name" class="form-control" placeholder="Surname" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required="">
                  </div>

             {{--     <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>--}}

                  <div class="col-md-12">
                    <textarea class="form-control" name="text" rows="6" placeholder="Prayer Point, if any" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                  </div>

                </div>
              </form>
            </div>
            <!-- End Contact Form -->

          </div>


        </div>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.262020514017!2d3.345882573117147!3d6.488467723573338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8db63af83c0d%3A0xf3f5fb5eda6ad358!2sRCCG%20New%20Wine%20Youth%20Church!5e0!3m2!1sen!2sng!4v1733056465401!5m2!1sen!2sng" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->

      </section>
      <!-- /Contact Section -->
</x-guest-layout>
