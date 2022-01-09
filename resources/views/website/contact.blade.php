@extends('layouts.website')
@section('contents')
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Contact Us</h1>
            <ul>
                <li class="item"><a href="index.html">Home</a></li>
                <li class="item"><a href="contact.html"><i class="flaticon-play-button"></i>Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="/website/assets/img/page-title/contact-bg.jpg" alt="Demo Image">
    </div>
</div>


<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="info-item">
                        <i class='flaticon-smartphone'></i>
                        <div class="info-content">
                            <p>call us</p>
                            <a href="tel:+19085029655">(908) 502 9655</a><br/>
                            <a href="tel:+8809666911566">(096) 66911566</a><br/>
                            <a href="tel:+8801713608770">(017) 13608770</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class='flaticon-email'></i>
                        <div class="info-content">
                            <p>mail us</p>
                            <a
                                href="#"><span
                                    class="__cf_email__"
                                    data-cfemail="533b363f3f3c13303c3d20273a387d303c3e">info@hsblco.com</span></a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class='flaticon-address'></i>
                        <div class="info-content">
                            <p>visit us USA Office</p>
                            <a href="#">309 Fellowship Road, Suite 200,<br/> Mt. Laurel, New Jersey, USA</a><br/><br/>
                            <p>visit us BD Office</p>
                            <a href="#">218/09 (4th Floor) West Kafrul, Begum Rokeya Sarani,Dhaka
                                <br/>Bangladesh</a>
                        </div>                        
                    </div>                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="content">
                        <h3>Get In touch</h3>
                        <p>Do not hagited to communicate with us. We are waiting for your call.....</p>
                    </div>
                    <br/>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required=""
                                data-error="Please enter your name" placeholder="Name" />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" required=""
                                data-error="Please enter your email" placeholder="Email" />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="subject" required=""
                                data-error="Please enter your phone number" placeholder="Subject" />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                required="" data-error="Please enter your message"
                                placeholder="Message..."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="agreement">
                            <label for="agreement">I agreed Constik <a href="terms-of-service.html">Terms of
                                    Services</a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                        </div><br/><br/><br/>
                        <div class="cta-btn">
                            <button type="submit" class="primary-btn">send message</button>
                            <div id="msgSubmit" class="h5 text-center hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8690110156176!2d90.37452311479728!3d23.78767839326859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c117e90eb7e7%3A0x8f1e094f962b3c40!2sHSBLCO%20Solution!5e0!3m2!1sen!2sbd!4v1640702501091!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@include('website.includes.news')
@endsection