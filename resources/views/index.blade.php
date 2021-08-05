@extends('layouts.main')
@section('head')


    
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="heading_main text_align_left col-12" style="margin-bottom: 15px">
                    <h2><span>Welcome To</span> <span style="color:#12385b">{{config('app.name')}}</span> </h2>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <img src="images/img2.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <p>
                        @if ($settings)
                            {{$settings->welcome_message }}
                        @endif 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Our Classes</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p1.png" alt="#" />
                        <h4>Lower Primary</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p2.png" alt="#" />
                        <h4>Upper Primary</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p3.png" alt="#" />
                        <h4>Junior High</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section margin-top_50 silver_bg p-2">
        <div class="container">
            <div class="row">
                <div class="heading_main text_align_left col-12" style="margin-bottom: 15px">
                    <h2><span>Apply for Admission</h2>
                </div>
                <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="images/img6.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <p>
                        @if ($settings)
                             {{$settings->admission_message }}
                        @endif
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="w-full col-12 heading_main text_align_center">
                <h2><span>Proprietor Message</span></h2>
            </div>
            <div class="row overflow-auto justify-content-center">
                <div class="col-md-6" style="max-height:350px; max-width:350px;">
                    <div class="full text-center">
                        <img class="img-responsive" src="images/sohis-proprie.png" alt="Proprietor"
                            style="max-height:350px; max-width:350px; object-fit: contain;" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <p>
                        @if ($settings)
                             {{$settings->proprietor_message }}
                        @endif
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    @if ($whyus)
     <section id="whyUs">
        <!-- Start why us top -->
        <div class="row" style="margin-top: 3rem">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_top">
                    <div class="container">
                        <!-- Why us top titile -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="heading_main text_align_center">
                                    <h2><span>Why Us </span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top titile -->
                        <!-- Start Why us top content  -->
                        <div class="row">
                            @foreach ($whyus as $why)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            style="fill:#249037; width:3rem; height:3rem">
                                            <path d="{{$why->svg}}" />
                                        </svg>
                                    </div>
                                    <h3>{{$why->title}}</h3>
                                    <p>{{$why->message}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- End Why us top content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us top -->

    </section>   
    @endif




    <div class="section top-content layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Events/Schedules</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 active">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img2">
                    </div>
                    @foreach ($posts as $post)
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="images/img8.png" alt="#" />
                            <h4 style="
                                line-height: 27px !important; 
                                margin:0;
                                width:100%;
                                padding:2.5px">
                            {{$post->title}}</h4>
                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>  
                    @endforeach
                    {{-- <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img2">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/contact-us.jpeg')}}" class="img-fluid mx-auto d-block" alt="img3">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img4">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img5">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img6">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/sohis-proprie.png')}}" class="img-fluid mx-auto d-block" alt="img7">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('images/contact-us.jpeg')}}" class="img-fluid mx-auto d-block" alt="img8">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>















    
    <!-- End why us section -->
    <!-- section -->
    {{-- @if ($posts)
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Events/Schedules</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="images/img9.png" alt="#" />
                                            <h4>Technology</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="images/img8.png" alt="#" />
                                            <h4>Education</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="images/img9.png" alt="#" />
                                            <h4>Technology</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="images/img8.png" alt="#" />
                                            <h4>Education</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif --}}
    <!-- end section -->

    <!-- ==== Our tutors -->
    <section id="ourTutors">
        <div class="container p-4">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading_main text_align_center">
                        <h2><span>Our Facilitators </span></h2>
                    </div>
                </div>
            </div>
            <!-- End Our levels titile -->

            <!-- Start Our courses content -->

            <!-- our tutors -->
            @if ($teachers)
            <div class="row">
                <div class="row">
                    @foreach ($teachers as $teacher)
                    <div class="col-sm-12 col-md-4 col-lg-3 p-3 bg-light">
                        <div class="single_tutors">
                            <div class="tutors_thumb">
                                <img src="images/img8.png" class="img-thumbnail" />
                            </div>
                            <div class="singTutors_content">
                                <h3 class="tutors_name">{{$teacher->name}}</h3>
                                <span style="font-weight:600; color:rgb(155, 5, 17)">{{$teacher->role}}</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="singTutors_social">
                                <ul class="tutors_socnav row">
                                    <li><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
                                        </svg>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/>
                                        </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Our courses content -->
            </div>
            @endif
    </section>
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function() {
	
	
	/*
	    Carousel
	*/
	$('#carousel-example').on('slide.bs.carousel', function (e) {

	    /*
	        CC 2.0 License Iatek LLC 2018
	        Attribution required
	    */
	    var $e = $(e.relatedTarget);
	    var idx = $e.index();
	    var itemsPerSlide = 5;
	    var totalItems = $('.carousel-item').length;
	    
	    if (idx >= totalItems-(itemsPerSlide-1)) {
	        var it = itemsPerSlide - (totalItems - idx);
	        for (var i=0; i<it; i++) {
	            // append slides to end
	            if (e.direction=="left") {
	                $('.carousel-item').eq(i).appendTo('.carousel-inner');
	            }
	            else {
	                $('.carousel-item').eq(0).appendTo('.carousel-inner');
	            }
	        }
	    }
	});
	
});

</script>
@endsection


