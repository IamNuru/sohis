@extends('layouts.main')

@section('content')
    <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3 style="font-size: 18px;">News / Events / Schedules</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section margin-top_50">
        @if (count($posts) > 0)
            <div class="container">
                @foreach ($posts as $post)
                 <div class="item mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="images/img2.png" alt="news image">
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="/blog/1">{{$post->title}}</a></h3>
                            <div class="meta mb-1"><span class="date">{{$post->created_at}}</span>
                                <span class="time"style="font-weight: 200">5 min read</span>
                            </div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis, ultricies...
                            </div>
                            <div class="w-full p-1">
                                <div class="text-primary" style="font-weight: 700">{{$post->type}}</div>
                            </div>
                            <a class="more-link" href="/blog/1">Read more &rarr;</a>
                        </div>
                        <!--//media-body-->
                    </div>
                    <!--//media-->
                </div>
                <!--//item-->   
                @endforeach
                <div class="w-full d-flex justify-content-center" 
                style="font-size: 24px; font-weight: 600;">
                    {{ $posts->links() }}
                </div>
                

                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                            class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="">Next<i
                            class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        @else
            <h2 class="text-center">No Posts Available </h2>
        @endif

    </div>
    <!-- end section -->
@endsection
