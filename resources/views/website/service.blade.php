@extends('layouts.website')
@section('contents')
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Services</h1>
            <ul>
                <li class="item"><a href="index.html">Home</a></li>
                <li class="item"><a href="services-grid.html"><i class="flaticon-play-button"></i>Services</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="/website/assets/img/page-title/service-grid-bg.jpg" alt="Demo Image">
    </div>
</div>
@include('website.includes.wearesec')
<section id="renovate" class="renovate-section renovate-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="image-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="image">
                                <img src="/website/assets/img/renovate.png" alt="Demo Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content">
                    <h2 class="color-secondary">See How We <span>Renovate</span> A Dream software</h2>
                    <p>You can dream, create, design and renovate the most place in the world. But it requires more
                        peoples.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                    <div class="item-list">
                        <ul>
                            <li><i class="flaticon-play-button"></i>100% Satisfaction Guarantee.</li>
                            <li><i class="flaticon-play-button"></i> Accurate Testing Processes.</li>
                            <li><i class="flaticon-play-button"></i> 17+ Years Of Experience. </li>
                            <li><i class="flaticon-play-button"></i> Strong Building Materials.</li>
                            <li><i class="flaticon-play-button"></i> Eco Friendly Build Materials.</li>
                        </ul>
                    </div>
                    <p>You can dream, create, design and renovate the most place in the world. But it requires more
                        peoples.</p>
                    <div class="cta-btn">
                        <a href="pricing.html" class="primary-btn">Estimate Your Costing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="build" class="build-section pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="content">
                    <h2 class="color-secondary">We Also <span>Build</span> From The Scratch</h2>
                    <p>You can dream, create, design and renovate the most place in the world. But it requires more
                        peoples.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                    <div class="item-list">
                        <ul>
                            <li><i class="flaticon-play-button"></i>100% Satisfaction Guarantee.</li>
                            <li><i class="flaticon-play-button"></i> Accurate Testing Processes.</li>
                            <li><i class="flaticon-play-button"></i> 17+ Years Of Experience. </li>
                            <li><i class="flaticon-play-button"></i> Strong Building Materials.</li>
                            <li><i class="flaticon-play-button"></i> Eco Friendly Build Materials.</li>
                        </ul>
                    </div>
                    <p>You can dream, create, design and renovate the most place in the world. But it requires more
                        peoples.</p>
                    <div class="cta-btn">
                        <a href="pricing.html" class="primary-btn">Estimate Your Costing</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="image-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="image">
                                <img src="/website/assets/img/build.png" alt="Demo Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('website.includes.rprojects')
@endsection