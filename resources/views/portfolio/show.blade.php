@extends('base')

@section('meta-title', $portfolio->title )
@section('meta-description', $portfolio->body )
@section('content')
    <div class="portfolio_details_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="portfolio_details_content text-center mb-50">
                        <span>{{ $portfolio->category_p->name }}</span>
                        <h3>Gives you the best Financial  <br>
                            solution for business</h3>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="portfolio_details_thumb">
                        <img src="/portfolio/{{ $portfolio->image }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="portfolio_details_content mt-50 mb-50 text-center">
                        <h4>The Result</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                        <div class="live_view_btn mt-50">
                            <a href="#" class="boxed-btn3-green-2">Live View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="portfolio_details_thumb">
                        <img src="/img/gallery/details_img_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- project  -->
    <div class="project_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_info text-center">
                        <h3>Do you Have any Project?</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio <br>
                            cumque nihil impedit quo minus.</p>
                        <a href="#" class="boxed-btn3-white">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()