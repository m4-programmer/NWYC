<section id="testimonials" class="testimonials section">

    <div class="container my-5" data-aos="fade-up">
        <h2 class="text-center text-main-color">What People are Saying</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">

                @forelse($testimonials as $data)
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset($data->image)}}" class="testimonial-img" alt="">
                                <h3>{{$data->name}}</h3>
{{--                                <h4>{{$data->job}}</h4>--}}
                                <div class="stars">
                                    @for($i=1; $i>= $data->rating; $i++)
                                        {!! '<i class="bi bi-star-fill"></i>' !!}
                                    @endfor
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{$data->text}}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
