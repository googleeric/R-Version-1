@extends('layouts.master')

@section('content')
    <!-- Product Catagories-->
    <div class="product-catagories-wrapper pt-3">
      <div class="container">
        <div class="section-heading">
          <h6 class="ml-1">Rental Products Category</h6>
        </div>
        <div class="product-catagory-wrap d-block d-sm-none">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="card mb-6 catagory-card playstation">
                <div class="card-body fliter-position"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/ps4.png" alt=""><span>Playstation</span></a></div>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="card mb-6 catagory-card controller">
                <div class="card-body"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/controller.png" alt=""><span>Controller</span></a></div>
              </div>
            </div>
            <br>
            <div class="col-6 col-md-3">
              <div class="card mb-6 catagory-card foosball shop-grid">
                <div class="card-body"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/foosball.png" alt=""><span>Foosball</span></a></div>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="card mb-6 catagory-card carrom shop-grid">
                <div class="card-body"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/carrom.png" alt=""><span>Carrom</span></a></div>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="card mb-3 catagory-card chess shop-grid">
                <div class="card-body"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/chess.png" alt=""></i><span>Chess</span></a></div>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="card mb-3 catagory-card tt shop-grid">
                <div class="card-body"><a href="catagory.html"><img class="filters" src="../assets/img/product-icons/tt.png" alt=""></i><span>Table Tennis</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-catagory-wrap d-none d-sm-block d-sm-none d-md-block">
          <div class="row">
            <div class="col-4">
              <div class="card mb-3 catagory-card playstation">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/ps4.png" alt=""><span>Playstation</span></a></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card mb-3 catagory-card controller">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/controller.png" alt=""><span>Controller</span></a></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card mb-3 catagory-card foosball">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/foosball.png" alt=""><span>Foosball</span></a></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card mb-3 catagory-card carrom">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/carrom.png" alt=""><span>Carrom</span></a></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card mb-3 catagory-card chess">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/chess.png" alt=""></i><span>Chess</span></a></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card mb-3 catagory-card tt">
                <div class="card-body lg-padding"><a href="catagory.html"><img class="filter-lg" src="../assets/img/product-icons/tt.png" alt=""></i><span>Table Tennis</span></a></div>
              </div>
            </div>
          </div>
       </div>
    </div>
    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">All Products</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a class="active" href="shop-grid.html"><i class="lni-grid-alt"></i></a><a href="shop-list.html"><i class="lni-radio-button"></i></a></div>
          </div>
          <div class="row">
            <!-- Single Top Product Card-->
            @foreach ($products as $product)
            <div class="col-6 col-sm-4">
              <div class="card top-product-card mb-3">
              <div class="card-body"><span class="badge badge-success">New</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a><a class="product-title d-block" href="/product/id">{{$product->product_name}}</a>
                  <p class="small-desc">{{$product->pack_included}}</p>
                  <p class="sale-price">₹ {{$product->discount_cost}}<span>₹ {{$product->rent_cost}}</span></p>
                  <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni-plus"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
@endsection