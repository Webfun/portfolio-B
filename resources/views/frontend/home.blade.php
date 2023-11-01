@extends('frontend.layouts.app')
@section('title', 'Home')
@section('page')


<section class="home_banner_02">
    <div class="home-carousel owl-theme owl-carousel">
      <div class="slide-item">
        <div class="image-layer" data-background="{{ asset('frontend/images/bg/15.jpg')}}"></div>
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 content-column">
              <div class="content-box">
                <h1 class="home-carousel-title">Unique <span class="text-primary-color">Exterior</span> <span class="text-obj1">Office design</span></h1>
                <p class="home-carousel-text">We have almost 20+ years of experience for providing interior & Architectural services solutions</p>
                <div class="btn-box">
                  <a href="page-services-style-01.html" class="animate-btn-style3">Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-item">
        <div class="image-layer" data-background="{{asset('frontend/images/bg/12.jpg')}}"></div>
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 content-column">
              <div class="content-box">
                <h1 class="home-carousel-title">Modern <span class="text-primary-color">Building</span> <span class="text-obj1">Architecture</span></h1>
                <p class="home-carousel-text">We have almost 20+ years of experience for providing interior & Architectural services solutions</p>
                <div class="btn-box">
                  <a href="page-contact-us.html" class="animate-btn-style3">Get In Touch</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-item">
        <div class="image-layer" data-background="{{asset('frontend/images/bg/16.jpg')}}"></div>
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 content-column">
              <div class="content-box">
                <h1 class="home-carousel-title">World class <span class="text-primary-color">interior</span> <span class="text-obj1">design</span></h1>
                <p class="home-carousel-text">We have almost 20+ years of experience for providing interior & Architectural services solutions</p>
                <div class="btn-box">
                  <a href="page-about.html" class="animate-btn-style3">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Slider End -->
  <!-- Service Section Area Start -->
  <section class="service-section-style2 bg-no-repeat bg-cover bg-pos-cb pdt-105 pdb-110 pdb-lg-105" data-background="{{ asset('frontend/images/bg/abs-bg8.png')}}">
    <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="title-box-center">
              <h5 class="sub-title-line-bottom text-primary-color mrb-10">What We're Offering</h5>
              <h2 class="title">Introduce Our Professional <span class="text-primary-color">Services</span> Area</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="service-style2">
              <div class="service-item-thumb">
                <img class="img-full" src="{{ asset('frontend/images/service/service_01.jpg')}}" alt="" />
                <div class="service-item-icon">
                  <i class="webextheme-icon-measure"></i>
                </div>
                <div class="service-item-content">
                  <h6 class="service-categories">Interior</h6>
                  <h4 class="service-title"><a href="service-architecture.html">Interior work</a></h4>
                  <div class="service-item-inner-icon">
                    <i class="webextheme-icon-measure"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="service-style2">
              <div class="service-item-thumb">
                <img class="img-full" src="{{ asset('frontend/images/service/service_04.jpg')}}" alt="" />
                <div class="service-item-icon">
                  <i class="webextheme-icon-stairs"></i>
                </div>
                <div class="service-item-content">
                  <h6 class="service-categories">Interior</h6>
                  <h4 class="service-title"><a href="service-architecture.html">Interior work</a></h4>
                  <div class="service-item-inner-icon">
                    <i class="webextheme-icon-stairs"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="service-style2">
              <div class="service-item-thumb">
                <img class="img-full" src="{{ asset('frontend/images/service/service_05.jpg')}}" alt="" />
                <div class="service-item-icon">
                  <i class="webextheme-icon-kitchen"></i>
                </div>
                <div class="service-item-content">
                  <h6 class="service-categories">Interior</h6>
                  <h4 class="service-title"><a href="service-architecture.html">Kitchen Interior</a></h4>
                  <div class="service-item-inner-icon">
                    <i class="webextheme-icon-kitchen"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mrt-35">
          <div class="col-xl-12 text-center">
            <div class="service-load-more">
              <h5 class="text">
                Do You Want To explore more services just <span><a href="page-services-style-02.html" class="text-underline text-primary-color">click here</a></span>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section Area End -->
  <!-- About Section Start -->
  <section class="about-section pdb-110">
    <div class="custom-md-container">
      <div class="row">
        <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <h5 class="side-line-left text-primary-color mrb-10">About Our Company</h5>
          <h2 class="mrb-25">Professional Designers for <span class="text-primary-color">Creative</span> Architecture</h2>
          <p class="mrb-30">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts pretium a in dictumst mollis montes maecenas at sapien condimentum orci ornare</p>
          <div class="row mrb-40">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <ul class="order-list primary-color">
                <li>business applications through</li>
                <li>revolutionary catalysts for chang</li>
                <li>catalysts for chang the Seamlessly</li>
              </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <ul class="order-list primary-color">
                <li>business applications through</li>
                <li>procedures whereas processes</li>
                <li>catalysts for chang the Seamlessly</li>
              </ul>
            </div>
          </div>
          <div class="row align-items-center mrb-lg-60 mrb-sm-0">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="about-person mrb-sm-50">
                <div class="about-person-img">
                  <img src="{{asset ('frontend/images/about/about-person-img1.jpg')}}" alt="" />
                </div>
                <div class="about-person-content">
                  <h5 class="about-person-name">David Smith</h5>
                  <p class="about-person-designation">CEO of Company</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <a href="page-about.html" class="animate-btn-style2 mrb-sm-60">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="about-image-box-style2 dot-circle">
            <img class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block" src="{{asset('frontend/images/about/about-sm4.jpg')}}" alt="" />
            <img class="about-image2 img-full" src="{{asset('frontend/images/about/about-lg3.jpg')}}" alt="" />
            <div class="call-us-now">
              <h3 class="number mrt-0 text-white">25+</h3>
              <p class="call-us-title mrb-0 text-white">Years Of Experiences</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->
  <!-- Offer Section Start -->
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h5 class="side-line-left text-primary-color mrb-10">What We Offer</h5>
            <h2 class="text-white mrb-30 mrb-sm-30">
              Our Company <span class="text-primary-color">Make You<br /> </span>Feel More Confident
            </h2>
            <p class="text-white mrb-40">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Est vel doloribus alias placeat nemo blanditiis inventore voluptatum comec deeaemodi temporacy quis dicta ipsam quam sit pariatur nemo</p>
            <div class="video-block mrb-lg-60">
              <div class="video-link">
                <a class="video-popup" href="https://www.youtube.com/watch?v=aXj3XhXN6v4"><i class="base-icon-play1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="shine-effect">
              <img class="img-full" src="{{ asset('frontend/images/about/divider-img1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="row mrt-110">
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="webextheme-icon-interior-design-1"></span>
                </div>
                <h6 class="title">Interior Design</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="webextheme-icon-kitchen"></span>
                </div>
                <h6 class="title">Kitchen Interior</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="webextheme-icon-architect-4"></span>
                </div>
                <h6 class="title">Skilled Team</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="base-icon-071-guarantee"></span>
                </div>
                <h6 class="title">Trusted Work</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="base-icon-166-money"></span>
                </div>
                <h6 class="title">Low Cost</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="feature-box-style2 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="800ms">
              <div class="inner-box">
                <div class="feature-box-icon">
                  <span class="base-icon-135-quality"></span>
                </div>
                <h6 class="title">Award Winner</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Offer Section End -->
  <!-- why Choose Us Section Start -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-xl-6 bg-cover" data-background="{{ asset('frontend/images/bg/12.jpg')}}"></div>
        <div class="col-lg-12 col-xl-6 p-0">
          <div class="divider-gap bg-silver-light">
            <h2 class="mrb-25">Why You Choose Us?</h2>
            <p class="mrb-40 mrb-sm-60">Aenean euismod condimentum cursus in placerat quisque diam, volutpat massa turpis non pellentesque erat orci faucibus.</p>
            <div class="icon-box-two mrb-40">
              <div class="icon bg-primary-color f-left">
                <span class="webexflaticon webextheme-icon-measure"></span>
              </div>
              <div class="icon-details">
                <h4 class="icon-box-title mrb-10">Superior customer service</h4>
                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
              </div>
            </div>
            <div class="icon-box-two mrb-40">
              <div class="icon bg-primary-color f-left">
                <span class="webexflaticon webextheme-icon-architect-4"></span>
              </div>
              <div class="icon-details">
                <h4 class="icon-box-title mrb-10">We Have Experience Team</h4>
                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
              </div>
            </div>
            <div class="icon-box-two">
              <div class="icon bg-primary-color f-left">
                <span class="webexflaticon webextheme-icon-013-sketch1"></span>
              </div>
              <div class="icon-details">
                <h4 class="icon-box-title mrb-10">Working with Modern Tools</h4>
                <p>Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why Choose Us Section End -->
  <!-- Testimonials Section Start -->
  <section class="testimonial-style2-section pdt-105 pdb-110 bg-no-repeat bg-cover bg-pos-cb" data-background="{{ asset('frontend/images/bg/abs-bg7.png')}}">
    <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="title-box-center">
              <h5 class="sub-title-line-bottom text-primary-color mrb-10">Testimonials</h5>
              <h2 class="title">What Our <span class="text-primary-color">Client's</span> Say</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="owl-carousel testmonial_3col testimonial-style2 text-left">
            <div class="testimonial-item">
              <div class="testimonial-thumb">
                <img src="{{ asset('frontend/images/testimonials/testimonial-img1.jpg')}}" alt="" />
              </div>
              <div class="testimonial-content">
                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                <h4 class="client-name">Aurther Maxwell</h4>
                <h6 class="client-designation">CEO, Apple Inc.</h6>
              </div>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-thumb">
                <img src="{{ asset('frontend/images/testimonials/testimonial-img3.jpg')}}" alt="" />
              </div>
              <div class="testimonial-content">
                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                <h4 class="client-name">Aurther Maxwell</h4>
                <h6 class="client-designation">CEO, Apple Inc.</h6>
              </div>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-thumb">
                <img src="{{ asset('frontend/images/testimonials/testimonial-img2.jpg')}}" alt="" />
              </div>
              <div class="testimonial-content">
                <p class="comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit oluptatibus blanditiis amet optio fugiat nisi est repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                <h4 class="client-name">Aurther Maxwell</h4>
                <h6 class="client-designation">CEO, Apple Inc.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Section End -->
  <!-- Clients Section Area Start -->
  <section class="clients-section pdt-85 pdb-160 pdb-lg-90 bg-pos-cc img-lum1" data-background="{{('frontend/images/bg/16.jpg')}}" data-overlay-dark="9">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel client-items client_box_shadow opacity_1">
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_01_white.svg')}}" alt="" />
              </div>
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_02_white.svg')}}" alt="" />
              </div>
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_03_white.svg')}}" alt="" />
              </div>
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_04_white.svg')}}" alt="" />
              </div>
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_05_white.svg')}}" alt="" />
              </div>
              <div class="client-item">
                <img src="{{ asset('frontend/images/clients/client_06_white.svg')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients Section Area End -->
  <!-- Get a Quote Section Start -->
  <section class="get-a-quote-section bg-no-repeat bg-cover bg-pos-ct pdt-110 pdb-130 bg-no-repeat bg-cover bg-pos-cb" data-background="{{ asset('frontend/images/bg/abs-bg3.png')}}">
    <div class="section-title mrb-55 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-xl-6">
            <div class="request-a-call-back-form">
              <h5 class="side-line-left text-primary-color mrb-10">Quick Contact</h5>
              <h2 class="mrt-0 mrb-45 solid-bottom-line">Get a Quote</h2>
              <form action="#">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mrb-20">
                      <input type="text" placeholder="Name" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mrb-20">
                      <input type="text" placeholder="Phone" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mrb-20">
                      <input type="email" placeholder="Email" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mrb-20">
                      <select name="categories" class="custom-select-categories" required="">
                        <option value="">Choose Service Type</option>
                        <option>Computer</option>
                        <option>Business</option>
                        <option>Chemistry</option>
                        <option>Physics</option>
                        <option>Photoshop</option>
                        <option>Management</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="d-grid gap-2 mrb-0">
                      <button type="submit" class="cs-btn-one btn-square btn-primary-color">Request for Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Get a Quote Section End -->
  <!-- Project Section Start -->
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-105" data-background="{{ asset('frontend/images/bg/abs-bg3.png')}}" data-overlay-dark="4">
    <div class="section-title mrb-60 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-xl-8 col-lg-7 col-md-12">
            <div class="title-box-center">
              <h5 class="side-line-left text-primary-color mrb-10">Our Projects</h5>
              <h2 class="text-white mrb-md-40 mrb-sm-30">
                Our Outstanding <br />
                <span class="text-primary-color">Latest Proejcts</span> & Works
              </h2>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-12 text-lg-end">
            <p class="text-white mrb-0 mrb-md-40">Lorem ipsum dolor sit amet consectetur adipiscing augue curae duis pellentesque proin, quam faucibus accumsan feugiat donec aliquet</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="custom-md-container">
        <div class="row">
          <div class="col-xl-12">
            <div class="project-item-style1-wrapper">
              <div class="owl-carousel projects_4col">
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_01.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Interior</h6>
                      <h4 class="project-item-title"><a href="page-single-project-item">Interior work</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_02.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_03.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Decor</h6>
                      <h4 class="project-item-title"><a href="page-single-project-item">Decoration Art</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_04.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Design</h6>
                      <h4 class="project-item-title"><a href="page-single-project-item">Modern Kitchen</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_05.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('frontend/images/projects/project_06.jpg')}}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Section End -->
  <!-- News Section Start -->
  <section class="bg-no-repeat bg-cover bg-pos-ct pdt-105 pdb-80" data-background="{{ asset('frontend/images/bg/abs-bg9.png')}}">
    <div class="section-title mrb-55 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-8 col-md-12">
            <div class="title-box-center">
              <h5 class="side-line-left text-primary-color mrb-10">Latest Blog</h5>
              <h2 class="mrb-25">News & <span class="text-primary-color">Updates </span></h2>
              <p class="mrb-0 mrb-md-40">Lorem ipsum dolor sit amet, consectetur adipisicing nesciunt, aliquam alias sunt. Dolores aliquid unde reprehenderit omnis vitae cupiditate distinctio?</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-4 col-md-12 text-lg-end">
            <a href="page-news.html" class="animate-btn-style2">All News</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="news-wrapper mrb-30">
              <div class="news-thumb">
                <img src="{{ asset('frontend/images/news/01.jpg')}}" class="img-full" alt="blog" />
                <div class="news-top-meta">
                  <span class="entry-category">Interior</span>
                </div>
              </div>
              <div class="news-description">
                <h4 class="the-title"><a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a></h4>
                <p class="the-content">There are many variations of passages available but majority have suffered alteration</p>
                <div class="news-bottom-part">
                  <div class="post-author">
                    <div class="author-img">
                      <a href="page-news.html">
                        <img src="{{asset('frontend/images/testimonials/testimonial-img1.jpg')}}" class="rounded-circle" alt="#" />
                      </a>
                    </div>
                    <span><a href="page-news.html">Admin</a></span>
                  </div>
                  <div class="post-link">
                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2022</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="news-wrapper mrb-30 d-block d-xl-flex flex-column flex-sm-column-reverse">
              <div class="news-thumb">
                <img src="{{ asset('frontend/images/news/02.jpg')}}" class="img-full" alt="blog" />
                <div class="news-top-meta">
                  <span class="entry-category">Interior</span>
                </div>
              </div>
              <div class="news-description">
                <h4 class="the-title"><a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a></h4>
                <p class="the-content">There are many variations of passages available but majority have suffered alteration</p>
                <div class="news-bottom-part">
                  <div class="post-author">
                    <div class="author-img">
                      <a href="page-news.html">
                        <img src="{{ asset('frontend/images/testimonials/testimonial-img2.jpg')}}" class="rounded-circle" alt="#" />
                      </a>
                    </div>
                    <span><a href="page-news.html">Admin</a></span>
                  </div>
                  <div class="post-link">
                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2022</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="news-wrapper mrb-30">
              <div class="news-thumb">
                <img src="{{ asset('frontend/images/news/03.jpg')}}" class="img-full" alt="blog" />
                <div class="news-top-meta">
                  <span class="entry-category">Interior</span>
                </div>
              </div>
              <div class="news-description">
                <h4 class="the-title"><a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a></h4>
                <p class="the-content">There are many variations of passages available but majority have suffered alteration</p>
                <div class="news-bottom-part">
                  <div class="post-author">
                    <div class="author-img">
                      <a href="page-news.html">
                        <img src="{{ asset('frontend/images/testimonials/testimonial-img3.jpg')}}" class="rounded-circle" alt="#" />
                      </a>
                    </div>
                    <span><a href="page-news.html">Admin</a></span>
                  </div>
                  <div class="post-link">
                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>01 Jan, 2022</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- News Section End -->


@endsection
