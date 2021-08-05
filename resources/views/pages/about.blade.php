@extends('layouts.main')

@section('content')
    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>About us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-12 heading_main text_align_center" style="margin-bottom: 0px !important;">
                    <h2><span>Welcome To</span> <span style="color:#12385b">SOHIS</span> </h2>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <img src="images/img2.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 15px">
                    <div class="full">
                        <p>
                            {{$settings->about_us}} 
                        </>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <h2 class="margin-bottom_50 p-5"></h2>
@endsection
