@extends('layouts.user')
@section('page_h1', 'UnderGraduate Programmes')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<div class="page-content ">
    <!--banner-->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>UnderGraduate Programmes</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('page.show', ['page' => 'index']) }}"> Home</a></li>
                        <li class="breadcrumb-item">UnderGraduate-Programmes</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



    <div class="bg-tech">

        <div class="container mt-4 mb-5">

            <h3 class="mt-4">Please select your Graduation and find the right Course for you.</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>

            <div class="grid mt-5" id="cardGrid">

                <a href="{{ route('page.show', ['page' => 'graduation']) }}">
                    <div class="card"> Graduation<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="#">
                    <div class="card">Post Graduation
                        <br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="#">
                    <div class="card">Diploma
                        <br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="#">
                    <div class="card">PG Diploma
                        <br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="#">
                    <div class="card">Certificate<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="#">
                    <div class="card">PG Certificate<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

            </div>


        </div>
    </div>

    <!-- Newsletter -->
    <section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
        <div class="container">
            <div class="subscride-inner">
                <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-head mb-0">
                            <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <form class="dzSubscribe style-1" action="" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
                                            <span>SUBSCRIBE</span>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

</div>
@endsection