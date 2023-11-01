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
                <h1 class="home-carousel-title">Transforming  <span class="text-primary-color">Spaces, Enriching</span> <span class="text-obj1">Lives</span></h1>
                <p class="home-carousel-text">We create places that inspire and genuinely enrich
lives by giving spaces Life </p>
                <div class="btn-box">
                  <a href="page-services-style-01.html" class="animate-btn-style3">GET IN TOUCH</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
  </section>
  <!-- Home Slider End -->
  <!-- Service Section Area Start -->
  <section class="feature-work-section pdt-110 pdb-105">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
              <h5 class="side-line-left text-primary-color mrb-10">Our Works</h5>
              <h2 class="mrb-45">Our Feature <span class="text-primary-color">Works</span></h2>
              <a href="page-services-style-01.html" class="animate-btn-style2 mrb-sm-60">All Services</a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-armchair"></i>
                  <h4 class="service-title">Laboratory Solutions</h4>
                  <div class="services-count"></div>
                  <p class="service-description">We supply a range of products, including safety cabinets, ventilated equipment, modular lab furniture, and more.</p>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-kitchen"></i>
                  <h4 class="service-title">Datacenter Solutions</h4>
                  <div class="services-count"></div>
                  <p class="service-description">Explore tailored data center solutions with construction and classification based on design and tier ratings.</p>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-architect"></i>
                  <h4 class="service-title">Audio-Video Solutions</h4>
                  <div class="services-count"></div>
                  <p class="service-description">We promise exceptional entertainment, from Dolby Atmos setups to home theater automation</p>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
          </div>
  <!-- Service Section Area End -->
  <!-- About Section Start -->
  <section class="about-section pdt-110 pdb-105 bg-no-repeat bg-cover bg-pos-cb" data-background="{{ asset('frontend/images/bg/abs-bg3.png')}}" data-overlay-light="4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
              <figure class="about-image1 js-tilt d-none d-md-block d-lg-block d-xl-block">
                <img class="img-full" src="{{ asset('frontend/images/about/about-sm1.jpg')}}" alt="" />
              </figure>
              <figure class="about-image2">
                <img class="img-full" src="{{ asset('frontend/images/about/about-lg1.jpg')}}" alt="" />
              </figure>
            </div>
          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <h5 class="side-line-left subtitle text-primary-color abt-comp">About Our Company</h5>
            <h2 class="mrb-45 mrb-lg-35 create-cont">Creating imaginative designs, turning spaces into art.</h2>
            <p class="about-text-block mrb-40 cont-1">Making Exceptional interiors The pursuit of excellence, inventiveness, and specialized solutions fuels our passion. Planning, design, and project management are all included in our comprehensive services. We create functional works of art in all kinds of settings, from hotels to offices, fusing creativity with utility.</p>
           
            <div class="row no-gutters">
              <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 cons-2">
                <div class="featured-icon-box mrb-15">
                  <div class="featured-icon">
                    <i class="webexflaticon webextheme-icon-003-staircase"></i>
                  </div>
                  <div class="featured-content">
                    <h4 class="featured-title">Exclusive Design</h4>
                    <p class="featured-desc">Elevate spaces with exclusive design expertise, creating extraordinary works of art.</p>
                  </div>
                </div>
                <div class="featured-icon-box mrb-sm-40">
                  <div class="featured-icon">
                    <i class="webexflaticon base-icon-158-employee-2"></i>
                  </div>
                  <div class="featured-content">
                    <h4 class="featured-title">Professional Team</h4>
                    <p class="featured-desc mrb-0">Trust our skilled team for vision-to-reality excellence and innovation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- About Section End -->
  <!-- Offer Section Start -->
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-105" data-background="{{asset('frontend/images/bg/abs-bg3.png')}}" data-overlay-dark="4">
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
              <p class="text-white mrb-0 mrb-md-40">Discover Our Outstanding Recent Projects in Innovative Fit-Out Solutions, Where Vision Meets Reality to Redefine Spaces.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="project-item-style1-wrapper mrr--300">
                <div class="owl-carousel projects_5col">
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
  <!-- why Choose Us Section End -->
  <!-- Testimonials Section Start -->
  <section class="testimonial-style2-section pdt-105 pdb-110 bg-no-repeat bg-cover bg-pos-cb" data-background="{{ asset('frontend/images/bg/abs-bg7.png')}}">
    <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="title-box-center">
              <h5 class="sub-title-line-bottom text-primary-color mrb-10">Testimonials</h5>
              <h2 class="title">What Our <span class="text-primary-color">Client's</span> Say about us?</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="bg-silver pdt-105 pdb-110 pdb-lg-70 bg-no-repeat bg-cover bg-pos-ct">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="owl-carousel testmonial_3col testimonial-style1 mrb-lg-40">
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
            </div>
          </div>
        </div>
      </div>
    </section>

    
  <!-- Testimonials Section End -->
  <!-- Clients Section Area Start -->
 
  <!-- News Section End -->
  
  


@endsection
