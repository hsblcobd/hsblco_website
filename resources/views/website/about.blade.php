@extends('layouts.website')
@section('contents')
    
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>About Us</h1>
            <ul>
                <li class="item"><a href="index.html">Home</a></li>
                <li class="item"><a href="about-us.html"><i class="flaticon-play-button"></i>About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="/website/assets/img/page-title/about-bg.jpg" alt="Demo Image">
    </div>
</div>


<section id="about" class="about-section about-style-three pt-100 pb-70 bg-secondary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-img-content">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/website/assets/img/about/about-img-4.jpg" alt="Demo Image">
                            </div>
                            <div class="about-image">
                                <img src="/website/assets/img/about/about-img-5.jpg" alt="Demo Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/website/assets/img/about/about-img-6.jpg" alt="Demo Image">
                            </div>
                            <div class="about-image">
                                <img src="/website/assets/img/about/about-img-7.jpg" alt="Demo Image">
                            </div>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <h3>17+</h3>
                        <span>Years</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <h2 class="color-secondary">QUALITY SOFTWARE SOLUTIONS FOR OUR <span>CLIENTS</span></h2>
                    <p>We provide solutions that help our clients’ orchestrate towards a satisfied customer experience and increased revenue.  </p>
                        <p>The HSBLCO team puts quality first in the satisfaction of its clients’ requirements. The resultant enables;</p>
                    <div class="about-item-list">
                        <ul>
                            <li><i class="flaticon-play-button"></i> Robust Cloud | On-premises software solutions </li>
                            <li><i class="flaticon-play-button"></i> Enhanced customer | user accessibility</li>
                            <li><i class="flaticon-play-button"></i> Enhanced business online presence</li>
                            <li><i class="flaticon-play-button"></i> Increased business opportunities | revenue</li>
                            <li><i class="flaticon-play-button"></i> Increased business credibility</li>
                            <li><i class="flaticon-play-button"></i> Brand Enablement and other functions </li>
                            <li><i class="flaticon-play-button"></i> Real-time business insights </li>
                        </ul>
                    </div>
                    <div class="cta-btn">
                        <a href="about-us.html" class="primary-btn">Continue to Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.includes.respsolution')

<section class="about-services-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-item-single">
                    <i><img src="/website/assets/img/icons/stairs.png" alt="Icon"></i>
                    <h3><a href="services-details.html">Our Mission</a></h3>
                    <p>“Build the best product, cause no unnecessary harm, use business to inspire and implement 
                        solutions to the environmental crisis and make easy lifestyle.”</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item-single">
                    <i><img src="/website/assets/img/icons/saw-machine.png" alt="Icon"></i>
                    <h3><a href="services-details.html">Our Vision</a></h3>
                    <p>“To serve the people around the globe through the power of unparalleled quality, reflecting the iconic brands, creative minds 
                        and innovative technologies that make ours the world’s premier software company.” </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item-single">
                    <i><img src="/website/assets/img/icons/helmet.png" alt="Icon"></i>
                    <h3><a href="services-details.html">Our Values</a></h3>
                    <p>"We’re honest, transparent and committed to doing what’s best for our customers and our company. We openly collaborate in pursuit of
                         the truth. We are working to satisfy our customer. We have a experts team to make dream to reality."</p>
                </div>
            </div>
        </div>
    </div>
</section>


@include('website.includes.team')


<section class="count-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="content">
                    <h2><span class="counter">17</span>+</h2>
                    <span>Years of Experience</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <h2><span class="counter">1256</span>+</h2>
                    <span>Happy Clients</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <h2><span class="counter">128</span>+</h2>
                    <span>Work Employed</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <h2><span class="counter">279</span>+</h2>
                    <span>Project Completed</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="map-section ptb-100 bg-primary">
    <div class="container">
        <div class="section-title style-two">
            <h2>Our Physical existance in the <span>World</span></h2>
            <p>We are committed to serve our customer. So do not hagitade to communicate with us.</p>
        </div>
        <div class="map-content">
            <div class="map-pin pin-1">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>309 Fellowship Road, Suite 200, Mt. Laurel, NJ 08054, <br>New Jersey, USA</span>
                </div>
            </div>
            <!--<div class="map-pin pin-2">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>32,Walse Street, <br> New York, USA</span>
                </div>
            </div>
            <div class="map-pin pin-3">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>32,Walse Street, <br> New York, USA</span>
                </div>
            </div>-->
            <div class="map-pin pin-4">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>218/09 (4th Floor) West Kafrul, Begum Rokeya Sarani,<br> Dhaka, Bangladesh</span>
                </div>
            </div>
            <!--<div class="map-pin pin-5">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>32,Walse Street, <br> New York, USA</span>
                </div>
            </div>
            <div class="map-pin pin-6">
                <div class='pin'><img src="/website/assets/img/pin.png" alt="Pin"></div>
                <div class="pin-content">
                    <span>32,Walse Street, <br> New York, USA</span>
                </div>
            </div>-->
            <div class="bg-image">
                <img src="/website/assets/img/bg-map-2.png" alt="Map Image">
            </div>
        </div>
    </div>
</section>


@include('website.includes.testmonial')


<section class="newsletter-section newsletter-three bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content ptb-100">
                    <h2>Subscribe Our Newsletter</h2>
                    <form class="newsletter-form" data-toggle="validator">
                        <div class="input-group">
                            <input class="form-control" placeholder="E-mail" type="text" name="EMAIL" required=""
                                autocomplete="off">
                            <div class="cta-btn">
                                <button class="primary-btn" type="submit">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection