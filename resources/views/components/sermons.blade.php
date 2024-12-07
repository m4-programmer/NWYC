<style>
    .article-title {
        max-height: 3.8em; /* Adjust the max height as needed */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .article-description {
        /* Style for the description, if needed */
    }
    /*.video-container {*/
    /*    position: relative;*/
    /*    padding-bottom: 56.25%; !* 16:9 aspect ratio *!*/
    /*    height: 0;*/
    /*    overflow: hidden;*/
    /*    width: 100%;*/
    /*    max-width: 100%;*/
    /*    background: #000; !* Optional: To show a black background before video loads *!*/
    /*}*/

    /*.video-container iframe,*/
    /*.video-container object,*/
    /*.video-container embed {*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 0;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*}*/

</style>
@props(["sermons"])
<div class="container">

    <div class="row">

       @forelse($sermons as $data)

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                <div class="course-item">
{{--                    <img src="{{asset($data->cover)}}" class="img-fluid" alt="...">--}}
                    <div class="video-container">
                        {!! $data->url !!}
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category">{{$data->tag->title}}</p>
                            <p class="price">{{$data->created_at->format('d M Y')}}</p>
                        </div>

                        <h3><a href="{{url("")}}">{{$data->title}}</a></h3>
                        <p class="description">{!! $data->description !!}</p>
                        {{--            <div class="trainer d-flex justify-content-between align-items-center">--}}
                        {{--                <div class="trainer-profile d-flex align-items-center">--}}
                        {{--                <img src="{{asset('assets/img/trainers/trainer-1-2.jpg')}}" class="img-fluid" alt="">--}}
                        {{--                <a href="" class="trainer-link">Antonio</a>--}}
                        {{--                </div>--}}
                        {{--                <div class="trainer-rank d-flex align-items-center">--}}
                        {{--                <i class="bi bi-person user-icon"></i>&nbsp;50--}}
                        {{--                &nbsp;&nbsp;--}}
                        {{--                <i class="bi bi-heart heart-icon"></i>&nbsp;65--}}
                        {{--                </div>--}}
                        {{--            </div>--}}
                    </div>
                </div>
            </div>
            <!-- End Course Item-->

        @empty
        <div class="col-12 text-center">
            <p>No Sermons at the moment</p>
        </div>

        @endforelse
    </div>

</div>
