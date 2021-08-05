@extends('layouts.main')

@section('content')
    <!-- section -->

    <section class="inner_banner" style="min-height: 55px !important; max-height:75px !important">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3 style="line-height: 55px !important; font-size: 18px !important;">The title of the Post or Event</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container">
            <header class="blog-post-header text-center">
                <h2><span>The title of the blog post goes here</span></h2>
                <div class="meta mb-3">
                    <span class="date">Published 3 months ago</span>
                </div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner d-grid justify-content-center" style="display: grid;">
                    <img class="img-fluid" style="max-width: 575px !important; max-height: 376px !important;" src="{{asset('images/img8.png')}}" alt="image">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                    imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                    porttitor eu, consequat vitae, eleifend ac, enim. </p>

            </div>

            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>
        </div>
        <!--//container-->
    </article>
    <!-- end section -->
@endsection