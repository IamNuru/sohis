@extends('layouts.main')

@section('content')
    <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>WHY US ?</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section margin-top_50" style="margin-bottom: 3rem;">
        <div class="container">
            @foreach ($whyus as $why)
            <div class="row" 
                style="margin-bottom: 3.5rem; 
                        padding:2px; 
                        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;">
                <div class="heading_main text_align_center col-12" style="margin-bottom: 10px">
                    <h2 style="font-size: 24px"><span>{{$why->title}}</span></h2>
                </div>
                <div class="col-md-4 p-2 text-center">
                    <div class="full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style=" width: 50%; height:60%;">
                            <path d="{{$why->svg}}" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-8 layout_padding_2">
                    <div class="full">
                        <p>{{$why->message}}</p>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>
    <!-- end section -->
@endsection
