@props(['title', 'text', 'current' => "", 'image' => "assets/img/people/sermons.jpg" ])

<!-- Page Title -->
<div class="page-title" data-aos="fade" >
    <div class="heading" style="background: url({{asset($image)}});background-size: cover;width: 100%">
      <div class="container" >
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="">{{$title}}<br></h1>
            <p class="mb-0">{{$text ?? $slot}}</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href=".">Home</a></li>
          <li class="current">{{$current ?: $title}}<br></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
