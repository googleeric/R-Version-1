@extends('layouts.master')

@section('content')
<div class="page-content-wrapper cart-top">
  <div class="container">
    <!-- Cart Wrapper-->
    <div class="cart-wrapper-area py-3">
      <div class="cart-table card mb-3">
        <div class="table-responsive card-body">
          <table class="table mb-0">
            <tbody>
              <tr>
                <th scope="row"><a class="remove-product" href="#"><i class="lni-close"></i></a></th>
                <td><img src="../assets/img/product/5.jpg" alt=""></td>
                <td><a href="single-product.html">{{ Session::get('product_name')}}<span>{{Session::get('amount')}} {{Session::get('addon1')}}</span></a></td>
                <td>
                  <div class="quantity">
                    <input class="qty-text" type="text" value="1">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card user-data-card">
        <div class="card-body">
          <form action="#" method="POST">
            <div class="form-group">
              <div class="title mb-2"><i class="lni-user"></i><span>Full Name</span></div>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-phone-handset"></i><span>Phone</span></div>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-envelope"></i><span>Email Address</span></div>
              <input class="form-control" type="email">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-pin"></i><span>Pin Code</span></div>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-map-marker"></i><span>Booking Address</span></div>
              <input class="form-control" type="text">
            </div>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="row">
                  <div class="col-6 col-sm-6">
                    <div class="form-group ">
                      <div class="title mb-2"><i class="lni-calendar"></i><span>Start Date</span></div>
                      <input class="form-control" type="date" id="txtDate">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <div class="title mb-2"><i class="lni-timer"></i><span>Start Time</span></div>
                      <input class="form-control" type="time">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="title mb-2"><i class="lni-postcard"></i><span>Terms & Conditions</span></div>
              <p class="small-desc">1. Hello World Hello World Hello World</p>
              <p class="small-desc">2. Hello World Hello World Hello World</p>
              <p class="small-desc">3. Hello World Hello World Hello World</p>
            </div>
          </form>
        </div>
      </div>
      <br>
      <!-- Coupon Area-->
      <div class="card coupon-card mb-3">
        <div class="card-body">
          <div class="apply-coupon">
            <h6 class="mb-0">Have a coupon?</h6>
            <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
            <div class="coupon-form">
              <form action="#">
                <input class="form-control" type="text" placeholder="SUHA30">
                <button class="btn btn-primary" type="submit">Apply</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Cart Amount Area-->
      <div class="card cart-amount-area">
        <div class="card-body d-flex align-items-center justify-content-between">
          <h5 class="total-price mb-0">$<span class="counter">38.84</span></h5><a class="btn btn-warning" href="checkout.html">Checkout Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    
   