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
            <div class="row">
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
    <section style="padding: 0px 0px 0px 0px" class="testimonial-style2-section pdt-105 pdb-110 bg-no-repeat bg-cover bg-pos-cb "
        data-background="{{ asset('frontend/images/bg/abs-bg7.png') }}">
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
    </section>
    <section class="bg-silver pdt-105 pdb-110 pdb-lg-70 bg-no-repeat bg-cover bg-pos-ct">
        <div class="section-content">
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
