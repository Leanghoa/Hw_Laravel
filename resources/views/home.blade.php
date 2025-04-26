@extends('layouts.app')

@section('content')
<style>
    .main-banner {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        padding: 100px 0;
        color: white;
    }
    .main-banner h2 {
        font-size: 48px;
        font-weight: bold;
    }
    .main-banner p {
        font-size: 18px;
        margin-top: 20px;
        margin-bottom: 30px;
    }
    .white-button a {
        background-color: white;
        color: #2575fc;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: bold;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        margin-right: 10px;
    }
    .white-button a:hover {
        background-color: #2575fc;
        color: white;
    }
    .right-image img {
        max-width: 100%;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Get The Latest App From App Stores</h2>
                    <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
