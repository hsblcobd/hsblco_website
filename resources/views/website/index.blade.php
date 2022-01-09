@extends('layouts.website')
@section('contents')
    
    <div class="home-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h1>
                            We are here to create your <span>DREAM SOFTWARE SOLUTIONS</span>
                        </h1>
                        <p>
                            We provide services that help organizations to orchestrate within a digitally transformed world.
                        </p>
                        <div class="cta-btn">
                            <a href="services-grid.html" class="primary-btn">Explore Services</a>
                        </div>
                        <div class="social-link">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end p-0">
                    <div class="banner-img">
                        <img src="/website/assets/img/banner/banner-img-1.png" alt="Demo Image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="about-section pt-100 pb-70 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <h2>QUALITY SOFTWARE SOLUTIONS FOR OUR <span>CLIENTS</span></h2>
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
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="about-image left">
                                <img src="/website/assets/img/about/about-img-1.jpg" alt="Demo Image">
                            </div>
                            <div class="about-fact">
                                <i><img src="/website/assets/img/icons/helmet.png" alt="Icon"></i>
                                <div class="content">
                                    <h4>1,000+ Satisfied Customers</h4>
                                    <span>Satisfied By Us</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="about-fact">
                                <i><img src="/website/assets/img/icons/certificate.png" alt="Icon"></i>
                                <div class="content">
                                    <h4>17+ Year's</h4>
                                    <span>Of Experience</span>
                                </div>
                            </div>
                            <div class="about-image right">
                                <img src="/website/assets/img/about/about-img-2.jpg" alt="Demo Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('website.includes.wearesec')

    @include('website.includes.respsolution')

   @include('website.includes.rprojects')

    <section class="quote-section pt-100 pb-70 bg-secondary">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2 class="color-secondary">Contact Us for a <span>Quotation</span></h2>
                        <form id="contactForm" novalidate="true">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required=""
                                            data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required=""
                                            data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" id="phone" required=""
                                            data-error="Please enter your phone number" placeholder="Phone No">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" id="address" required=""
                                            data-error="Please enter your address" placeholder="Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="select-box">
                                            <select class="form-control" style="display: none;">
                                                <option value="5">Customized software </option>
                                                <option value="1">Web Design &amp; Development</option>
                                                <option value="2">Mobile Apps</option>
                                                <option value="0">Graphics Design</option>
                                                <option value="0">Digital Marketing</option>                                                
                                            </select>
                                            <div class="nice-select form-control" tabindex="0"><span
                                                    class="current">Customized software</span>
                                                <ul class="list">
                                                    <li data-value="5" class="option selected">Web Design &amp; Development</li>
                                                    <li data-value="1" class="option">Graphics Design</li>
                                                    <li data-value="2" class="option">Mobile Apps</li>
                                                    <li data-value="0" class="option">Digital Marketing</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="primary-btn disabled"
                                        style="pointer-events: all; cursor: pointer;">Submit</button>
                                    <div id="msgSubmit" class="h5 text-center hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="/website/assets/img/quote-img.png" alt="Demo Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('website.includes.team')


    @include('website.includes.testmonial')


    <div class="partner-area ptb-70 bg-secondary">
        <div class="container">
            <div class="partner-slider owl-carousel">
                <div class="slider-item">
                    <img src="/website/assets/img/partner/Finance-b-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Finance-r-01-01.png" alt="Demo Image">
                </div>
                <div class="slider-item">
                    <img src="/website/assets/img/partner/Health-care-b-01-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Health-care-r-01.png" alt="Demo Image">
                </div>
                <div class="slider-item">
                    <img src="/website/assets/img/partner/manufacture-b-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/manufacture-r-01-01.png" alt="Demo Image">
                </div>
                <div class="slider-item">
                    <img src="/website/assets/img/partner/Public-sector-b-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Public-sector-r-01-01.png" alt="Demo Image">
                </div>
                <div class="slider-item">
                    <img src="/website/assets/img/partner/Reak-estate-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Reak-estate-r-01-01.png" alt="Demo Image">
                </div>
                <div class="slider-item">
                    <img src="/website/assets/img/partner/Social-b-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Social-r-01-01.png" alt="Demo Image">
                </div>
				<div class="slider-item">
                    <img src="/website/assets/img/partner/Tele-B-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/Tele-R-01.png" alt="Demo Image">
                </div>
				<div class="slider-item">
                    <img src="/website/assets/img/partner/transport-B-01.png" alt="Demo Image">
                    <img src="/website/assets/img/partner/transport-R-01-01.png" alt="Demo Image">
                </div>
            </div>
        </div>
    </div>


    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="newsletter-content ptb-100">
                        <h2>Subscribe To Our Newsletter</h2>
                        <p>Keep up with recent HSBLCO Solutions Activities - Enter your e-mail and subscribe to our newsletter.</p>
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

    