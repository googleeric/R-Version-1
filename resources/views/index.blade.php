@extends('layouts.master')
@section('content')
      
      <div class="page-content-wrapper">
        <!-- Hero Slides-->
        <div class="hero-slides owl-carousel">
          <!-- Single Hero Slide-->
          <div class="single-hero-slide">
            <div class="slide-img"><img src="../assets/img/bg-img/1.jpg" alt=""></div>
            <div class="slide-content h-100 d-flex align-items-center">
              <div class="container">
                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Playstation (PS4)</h4>
                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">With Controller & Games</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Book Now</a>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide-->
          <div class="single-hero-slide">
            <div class="slide-img"><img src="../assets/img/bg-img/2.jpg" alt=""></div>
            <div class="slide-content h-100 d-flex align-items-center">
              <div class="container">
                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Table Tennis</h4>
                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">With 2 & 4 TT Bats</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms" data-wow-duration="1000ms">Book Now</a>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide-->
          <div class="single-hero-slide">
            <div class="slide-img"><img src="../assets/img/bg-img/3.jpg" alt=""></div>
            <div class="slide-content h-100 d-flex align-items-center">
              <div class="container">
                <h4 class="mb-0 text-white" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Chess</h4>
                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Metalic Chess</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Catagories-->
        <div class="product-catagories-wrapper pt-3">
          <div class="container">
            <div class="section-heading">
              <h6 class="ml-1">Rental Products Category</h6>
            </div>
            <div class="product-catagory-wrap">
              <div class="row">
                <div class="col-4">
                  <div class="card mb-3 catagory-card playstation">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/ps4.png" alt=""><span>Playstation</span></a></div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card mb-3 catagory-card controller">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/controller.png" alt=""><span>Controller</span></a></div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card mb-3 catagory-card foosball">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/foosball.png" alt=""><span>Foosball</span></a></div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card mb-3 catagory-card carrom">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/carrom.png" alt=""><span>Carrom</span></a></div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card mb-3 catagory-card chess">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/chess.png" alt=""></i><span>Chess</span></a></div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card mb-3 catagory-card tt">
                    <div class="card-body"><a href="catagory.html"><img src="../assets/img/product-icons/tt.png" alt=""></i><span>Table Tennis</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Flash Sale Slide-->
        <div class="flash-sale-wrapper pb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Rental Items</h6><a class="btn btn-primary btn-sm" href="/shop-grid">View All</a>
            </div>
            <!-- Flash Sale Slide-->
            <div class="flash-sale-slide owl-carousel">
              <!-- Single Flash Sale Card-->
              <div class="card flash-sale-card">
                <div class="card-body"><a href="single-product.html"><img src="../assets/img/product/1.jpg" alt=""><span class="product-title">Playstation (PS4)</span>
                    <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                    </div></a></div>
              </div>
              <!-- Single Flash Sale Card-->
              <div class="card flash-sale-card">
                <div class="card-body"><a href="single-product.html"><img src="../assets/img/product/2.jpg" alt=""><span class="product-title">Controllers Playstation(PS4)</span>
                    <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div></a></div>
              </div>
              <!-- Single Flash Sale Card-->
              <div class="card flash-sale-card">
                <div class="card-body"><a href="single-product.html"><img src="../assets/img/product/3.jpg" alt=""><span class="product-title">Foosball </span>
                    <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">100% Sold Out</span>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Top Products-->
        <div class="top-products-area clearfix">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Top Rental Products</h6><a class="btn btn-danger btn-sm" href="shop-grid.html">View All</a>
            </div>
            <div class="row">
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/1.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Playstation (PS4)</a>
                    <p class="sale-price">$13<span>$42</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/2.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Controllers</a>
                    <p class="sale-price">$74<span>$99</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/3.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Foosball</a>
                    <p class="sale-price">$99<span>$113</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/4.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Chess</a>
                    <p class="sale-price">$87<span>$92</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/5.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Carrom</a>
                    <p class="sale-price">$21<span>$25</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- Single Top Product Card-->
              <div class="col-6 col-sm-4">
                <div class="card top-product-card mb-3">
                  <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="../assets/img/product/6.jpg" alt=""></a><a class="product-title d-block" href="single-product.html">Table Tennis</a>
                    <p class="sale-price">$38<span>$41</span></p>
                    <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Cool Facts Area-->
        <div class="cta-area">
          <div class="container">
            <div class="cta-text px-4 py-5" style="background-image: url(img/bg-img/6.jpg)">
              <h4>Winter Sale 20% Off</h4>
              <p>Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-danger" href="#">Shop Today</a>
            </div>
          </div>
        </div>
@endsection
  