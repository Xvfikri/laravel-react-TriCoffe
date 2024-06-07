@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
              <div class="hero__text">
                  <span></span>
                  <h2>Welcome To TRI COFFE</h2>
                  <p>Pesan makanan dan minuman favorit Anda di Cafe Tri Coffe untuk <br> nikmati suasana nyaman dan beragam pilihan kuliner lezat.</p>
                  <a href="#" class="primary-btn">SHOP NOW</a>
              </div>
              
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            @foreach($menu_categories as $menu_category)
              <div class="col-lg-3">
                <div
                  class="categories__item set-bg"
                  data-setbg="{{ $menu_category->photo->getUrl() }}"
                >
                  <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner" style="background-color: aliceblue">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Banner End -->



    <section class="contact-section section-padding section-bg" id="section_5">
      <div class="contact_over"></div>
      <div class="container mt-5 mb-5" style="background-color: #FOF8FF; border-radius:20px; font ">
          <div class="row">
  
              <div class="col-lg-12 col-12 text-center">
                  <h2 class="mb-5">Tri Coffe Location</h2>
              </div>
  
              <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                  <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.508623976307!2d107.6271929147681!3d-6.973308669884404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e92e2dbda471%3A0x9db28a376f2dd64!2sTel-U%20Coffee%2C%20Jl.%20Telekomunikasi%20No.1%2C%20Sukapura%2C%20Kec.%20Dayeuhkolot%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040257!5e0!3m2!1sen!2sid!4v1684340239744!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  
  
              </div>
  
              <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                  <h4 class="mb-3">Head office</h4>
  
                  <p>Tri Coffe | Bandung | Telkom University</p>
  
                  <hr>
  
                  <p class="d-flex align-items-center mb-1">
                      <span class="me-2">Phone</span>
  
                      <a href="tel: 0822991181" class="site-footer-link">
                          0822991181
                      </a>
                  </p>
  
                  <p class="d-flex align-items-center">
                      <span class="me-2">Email</span>
  
                      <a href="mailto:TriCoffe@gmail.com" class="site-footer-link">
                          TriCoffe@gmail.com
                      </a>
                  </p>
              </div>
  
              <div class="col-lg-3 col-md-6 col-12 mx-auto">
                  <h4 class="mb-3">Tri Coffe</h4>
  
  
                  <hr>
  
                  <p class="d-flex align-items-center mb-1">
                      <span class="me-2">Phone</span>
  
                      <a href="tel: 0822991181" class="site-footer-link">
                          0822991181
                      </a>
                  </p>
  
                  <p class="d-flex align-items-center">
                      <span class="me-2">Email</span>
  
                      <a href="mailto:TriCoffe@gmail.com" class="site-footer-link">
                          TriCoffe@gmail.com
                      </a>
                  </p>
              </div>
  
          </div>
      </div>
</section>
@endsection
