@extends('frontend.layouts.app')
@section('title', 'Services')
@section('page')
<section class="page-title-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb-area">
            <h2 class="page-title">About US</h2>
            <ul class="breadcrumbs-link">
              <li><a href="{{'/about'}}">Home</a></li>
              <li><a href="index.html">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="padding-top: 110px;" class="about-section pdt-110 pdb-105 bg-no-repeat bg-cover bg-pos-cb"
        data-background="{{ asset('frontend/images/bg/abs-bg3.png') }}" data-overlay-light="4">
        <div class="container">
            <div class="row about-flex">
                <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
                        <figure class="about-image1 js-tilt d-none d-md-block d-lg-block d-xl-block">
                            <img class="img-full" src="{{ asset('frontend/images/about/about-sm1.jpg') }}" alt="" />
                        </figure>
                        <figure class="about-image2">
                            <img class="img-full" src="{{ asset('frontend/images/about/about-lg1.jpg') }}" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h5 class="side-line-left subtitle text-primary-color abt-comp">About Our Company</h5>
                    <h2 class="mrb-45 mrb-lg-35 create-cont">Creating imaginative designs, turning spaces into
                        art.</h2>
                    <p class="about-text-block mrb-40 cont-1">Making Exceptional interiors The pursuit of
                        excellence, inventiveness, and specialized solutions fuels our passion. Planning,
                        design, and project management are all included in our comprehensive services. We create
                        functional works of art in all kinds of settings, from hotels to offices, fusing
                        creativity with utility.</p>

                    <div class="row no-gutters">
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 cons-2">
                            <div class="featured-icon-box mrb-15">
                                <div class="featured-icon">
                                    <i class="webexflaticon webextheme-icon-003-staircase"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Exclusive Design</h4>
                                    <p class="featured-desc">Elevate spaces with exclusive design expertise,
                                        creating extraordinary works of art.</p>
                                </div>
                            </div>
                            <div class="featured-icon-box mrb-sm-40">
                                <div class="featured-icon">
                                    <i class="webexflaticon base-icon-158-employee-2"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Professional Team</h4>
                                    <p class="featured-desc mrb-0">Trust our skilled team for vision-to-reality
                                        excellence and innovation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background: #b88e75;" class="why-choose-us-style2-section bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80 why-us">
        <div class="section-content">
            <div class="container">
                <div style="align-items: center;" class="our-mission-row row mrb-110">
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-white mrb-30 o-mission-heading mrb-sm-30">
                            <span style="color: white;" class="text-primary-color">Our Mission<br> </span>
                        </h2>
                        <p class="text-white mrb-40">Our mission is to transform, inspire, and motivate people through the
                            use
                            of advanced fit-out solutions in venues. By providing personalized designs
                            and flawless execution, we aim to be the pinnacle of quality and go above
                            and beyond for our clients. We aspire to design spaces that have a lasting
                            influence and improve how people live, work, and interact with their surroundings. We are
                            incessantly in search of excellence</p>
                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp " data-wow-delay="100ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 twentytwenty-container" style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('frontend/images/before-after/3.jpg')}}"
                                    alt="img1" class="twentytwenty-before"
                                    style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('frontend/images/before-after/4.jpg')}}"
                                    alt="img1" class="twentytwenty-after"
                                    style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-items: center;" class="our-vision-row row mrb-110 vision-mt">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp our-mission" data-wow-delay="100ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container"
                                style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('frontend/images/before-after/3.jpg')}}"
                                    alt="img1" class="twentytwenty-before"
                                    style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('frontend/images/before-after/4.jpg')}}"
                                    alt="img1" class="twentytwenty-after"
                                    style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-white o-mission-heading mrb-30 mrb-sm-30">
                            <span style="color: white;" class="text-primary-color">Our Vision<br> </span>
                        </h2>
                        <p class="text-white mrb-40">To lead advancement in the field by redefining fit-out solutions with
                            creativity and unmatched craftsmanship. We strive to establish new standards
                            and design environments that astonish viewers and improve the quality of
                            human interaction through our persistent dedication to innovation and
                            client satisfaction.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-silver pdt-105 pdb-110 pdb-lg-70 bg-no-repeat bg-cover bg-pos-ct">
        <div class="section-content">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="title-box-center">
                                <h5 class="sub-title-line-bottom text-primary-color mrb-10">Testimonials</h5>
                                <h2 class="title">What Our <span class="text-primary-color">Client's</span> Say
                                    about us?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="owl-carousel testmonial_3col testimonial-style1 mrb-lg-40">
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('frontend/images/testimonials/testimonial-img1.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto
                                    quis harum laboriosam nostrum unde distinctio</p>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('frontend/images/testimonials/testimonial-img3.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto
                                    quis harum laboriosam nostrum unde distinctio</p>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('frontend/images/testimonials/testimonial-img2.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto
                                    quis harum laboriosam nostrum unde distinctio</p>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('frontend/images/testimonials/testimonial-img1.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto
                                    quis harum laboriosam nostrum unde distinctio</p>
                                <h4 class="client-name">Aurther Maxwell</h4>
                                <h6 class="client-designation">CEO, Apple Inc.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection
