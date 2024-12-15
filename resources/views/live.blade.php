<x-guest-layout>

    <!-- Page Title -->
    <x-page-title title="Live Service" current="Live Service" image="assets/img/people/sermons.jpg" >
        <p>
            We hope that these messages will be a blessing to you.
        </p>
    </x-page-title>
  <!-- End Page Title -->
{{--   <main class="container">--}}
{{--       <h1 class="text-main-color my-5" style="font-size: 42px; font-weight: bold">Worship With Us</h1>--}}
{{--       --}}{{-- Sermon's List --}}

{{--       <section  id="course-list" class="row">--}}
{{--            <div class="col-md-8 col-12">--}}

{{--            </div>--}}

{{--           <div class="col-md-4 col-12"></div>--}}
{{--       </section>--}}
{{--   </main>--}}

    <div class="container my-5">
        <!-- Title -->
        <h1 class="text-center text-main-color fw-bold">Worship With Us</h1>

        <!-- Main Section -->
        <div class="row mt-4">
            <!-- Video Section -->
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe src="{{$live->url_string}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6 mb-3">
                        <div class="bg-dark text-white text-center p-3 rounded">
                            <p>Did you make the decision to give your life to Christ?</p>
                            <a href="{{route("join-us.index")}}" class="btn btn-warning">Click Here</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="bg-dark text-white text-center p-3 rounded">
                            <p>Watch more sermons from New Wine Youth Church.</p>
                            <a href="{{route("sermons")}}" class="btn btn-warning">Watch Sermons</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Service Details Section -->
            <div class="col-lg-6">
                <div class="mb-4 p-3 border rounded">
                    <h5 class="fw-bold">Sunday Celebration Service</h5>
                    <p>Sundays at 8:30am WAT</p>
                    <p>Livestream starts at 9:15am</p>
                </div>
                <div class="mb-4 p-3 border rounded">
                    <h5 class="fw-bold">Treasure Search (Bible Study)</h5>
                    <p>Wednesdays at 6:30pm WAT (Online)</p>
                </div>
                <div class="mb-4 p-3 border rounded">
                    <h5 class="fw-bold">Festival Of Praise</h5>
                    <p>First Sunday of the month, 8:30am WAT</p>
                    <p>Livestream starts at 10am</p>
                </div>

                <!-- Footer Section -->
                <div class="text-center mt-5">
                    <div class="d-inline-block mx-3">
                        <i class="bi bi-calendar-event-fill text-main-color fs-3"></i>
                        <p class="mb-0 fw-bold">Service Times</p>
                    </div>
                    <div class="d-inline-block mx-3">
                        <i class="bi bi-book-fill text-main-color fs-3"></i>
                        <p class="mb-0 fw-bold">Bible</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Links Section -->


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</x-guest-layout>
