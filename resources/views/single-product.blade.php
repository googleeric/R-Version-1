    @extends('layouts.master')

    @section('content')
        
    <div class="page-content-wrapper">
      <form action="/booking-product" method="post">
        {{csrf_field()}}
        <!-- Product Slides-->
        <div class="product-slides owl-carousel">
          <!-- Single Hero Slide-->
          <div class="single-product-slide"><img src="{{$product->pic1}}" alt=""></div>
          <!-- Single Hero Slide-->
          @if ($product->pic2 != null || $product->pic3 != null)
            <div class="single-product-slide"><img src="{{$product->pic2}}" alt=""></div>  
            <!-- Single Hero Slide-->
            <div class="single-product-slide"><img src="{{$product->pic3}}" alt=""></div>  
          @endif
        </div>
        <div class="product-description pb-3">
          <!-- Product Title & Meta Data-->
          <div class="product-title-meta-data bg-white mb-3 py-3">
            <div class="container d-flex justify-content-between">
              <div class="p-title-price">
                <h6 class="mb-1">{{$product->product_name}}</h6>
                <p class="small-desc">{{$product->pack_included}}</p>
                <p class="sale-price mb-0">Start From ₹ {{$product->discount_cost}}</p><p class="small-desc">For 12Hrs</p>
              </div>
              <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni-heart-filled"></i></a><a href="#"><i class="lni-share"></i></a></div>
            </div>
            <!-- Ratings-->
            <div class="product-ratings">
              <div class="container d-flex align-items-center justify-content-between">
                <div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                <div class="total-result-of-ratings"><span>4.96</span><span>Very Good</span></div>
              </div>
            </div>
          </div>
          <!-- Selection Panel-->
          <div class="selection-panel bg-white mb-3 py-3">
            <div class="container">
              <!-- Choose Size-->
              <div class="choose-size-wrapper">
                <p class="mb-0 pack-include">Select Pricing</p>
                  <div class="row text-center">
                    <div class="col-4 col-sm-4">
                      <a class="pricing-btn1 btn btn-outline-dark btn-block" data-price="400">₹ 400 /12Hrs</a>
                    </div>
                    <div class="col-4 col-sm-4">
                      <a class="pricing-btn2 btn btn-outline-dark btn-block" data-price="750">₹ 750 /Day</a>
                    </div>
                    <div class="col-4 col-sm-4">
                      <a class="pricing-btn3 btn btn-outline-dark btn-block" data-price="1300">₹ 1300 /2-Days</a>
                    </div>
                    {{-- <div class="col-6 col-sm-3">
                      <div class="form-group">
                        <select class="form-control pricing-dropdown" id="sel1">
                          <option >3 To 7 Day</option>
                          <option>₹ 2000 /3-Days</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                        </select>
                      </div>
                    </div> --}}
                    <input type="hidden" value="{{$product->id}}" class="proid">
                  </div>
              </div>
            </div>
          </div>
          <!-- Selection Panel-->
          <div class="selection-panel bg-white mb-3 py-3">
            <div class="container">
              <!-- Choose Color-->
              <p class="mb-0 pack-include">Package Included</p>
              <div class="row text-center">
                <div class="col-6 col-sm-3">
                  <div class="card top-product-card mb-3">
                    <div class="card-body">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title d-block" href="/product/id">One Console</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3">
                  <div class="card top-product-card mb-3">
                    <div class="card-body">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title d-block" href="/product/id">Controller * 1</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3">
                  <div class="card top-product-card mb-3">
                    <div class="card-body">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title d-block" href="/product/id">HDMI Cable</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3">
                  <div class="card top-product-card mb-3">
                    <div class="card-body">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title d-block" href="/product/id">Games Access</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="selection-panel bg-white mb-3 py-3">
            {{-- @foreach ($addons as $addon) --}}
            <div class="container add-ons">
              <!-- Choose Color-->
              <p class="mb-0 pack-include">Add Ons - Add Extra's</p>
              <div class="row text-center">
                @foreach ($addons as $addon)
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                      <div class="card-body add-on">
                        <a class="product-thumbnail d-block"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                        <a class="product-title add-on-title d-block">Controllers</a>
                        <input type="checkbox" id="exampleCheck1" name="checkbox1" class="addon" value="{{$addon->addon_price}}"> 
                        <label class="form-check-label" for="exampleCheck1">{{$addon->addon_price}}</label>
                      </div>
                  </div>   
                </div>   
                @endforeach
                {{-- <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">UPS</a>
                      <input type="text" class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">Stabilizer</a>
                      <input type="checkbox" id="exampleCheck1" name="checkbox3" class="addon" value="50"> 
                      <label class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
            {{-- @endforeach --}}
            <div class="container add-ons2">
              <!-- Choose Color-->
              <p class="mb-0 pack-include">Add Ons - Add Extra's</p>
              <div class="row text-center">
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block">Controller * 2</a>
                        <input type="checkbox" id="exampleCheck1" name="checkbox1" class="addon" value="200"> 
                        <label class="form-check-label" for="exampleCheck1">Rs.200</label>
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">UPS</a>
                    
                      <input type="checkbox" id="exampleCheck1" name="checkbox2" class="addon" value="50"> 
                      <label class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">Stabilizer</a>
                      <input type="checkbox" id="exampleCheck1" name="checkbox3" class="addon" value="50"> 
                      <label class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container add-ons3">
              <!-- Choose Color-->
              <p class="mb-0 pack-include">Add Ons - Add Extra's</p>
              <div class="row text-center">
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block">Controller * 2</a>
                        <input type="checkbox" id="exampleCheck1" name="checkbox1" class="addon" value="200"> 
                        <label class="form-check-label" for="exampleCheck1">Rs.200</label>
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">UPS</a>
                    
                      <input type="checkbox" id="exampleCheck1" name="checkbox2" class="addon" value="50"> 
                      <label class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <div class="card mb-3">
                    <div class="card-body add-on">
                      <a class="product-thumbnail d-block" href="/product/{{$product->id}}"><img class="mb-2" src="{{$product->pic1}}" alt=""></a>
                      <a class="product-title add-on-title d-block" href="/product/id">Stabilizer</a>
                      <input type="checkbox" id="exampleCheck1" name="checkbox3" class="addon" value="50"> 
                      <label class="form-check-label" for="exampleCheck1">Rs.50</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add To Cart-->
          <div class="cart-form-wrapper bg-white mb-3 py-3">
            <div class="container">
                <input type="hidden" value="{{$product->id}}" name="proid" class="proid">
                
                {{-- <input class="form-control" type="text" id="qty2" step="1" min="1" max="12" name="quantity" value="1"><a class="btn btn-danger mr-2" href="checkout.html">Book Now</a> --}}
                <button class="btn btn-danger" type="submit">Book Now</button>
              {{-- </form> --}}
            </div>
          </div>
          <!-- Product Specification-->
          <div class="p-specification bg-white mb-3 py-3">
            <div class="container">
              <h6>Description</h6>
              <p>{{$product->description}}</p>
              <ul>
                <li>100% good reviews</li>
                <li>7 days returns</li>
                <li>Warranty not aplicable</li>
              </ul>
            </div>
          </div>
          <!-- Rating & Review Wrapper-->
          {{-- <div class="rating-and-review-wrapper bg-white py-3 mb-3">
            <div class="container">
              <h6>Ratings &amp; Reviews</h6>
              <div class="rating-review-content">
                <ul>
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail"><img src="img/bg-img/7.jpg" alt=""></div>
                    <div class="rating-comment">
                      <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                      <p class="comment mb-0">Very good product. It's just amazing!</p><span class="name-date">Designing World 12 Dec 2020</span>
                    </div>
                  </li>
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail"><img src="img/bg-img/8.jpg" alt=""></div>
                    <div class="rating-comment">
                      <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                      <p class="comment mb-0">WOW excellent product. Love it.</p><span class="name-date">Designing World 8 Dec 2020</span>
                    </div>
                  </li>
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail"><img src="img/bg-img/9.jpg" alt=""></div>
                    <div class="rating-comment">
                      <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
                      <p class="comment mb-0">What a nice product it is. I am looking it's.</p><span class="name-date">Designing World 28 Nov 2020</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div> --}}
          <!-- Ratings Submit Form-->
          {{-- <div class="ratings-submit-form bg-white py-3">
            <div class="container">
              <h6>Submit A Review</h6>
              <form action="#" method="POST">
                <div class="form-group">
                  <div class="stars">
                    <input class="star-1" type="radio" name="star" id="star1">
                    <label class="star-1" for="star1"></label>
                    <input class="star-2" type="radio" name="star" id="star2">
                    <label class="star-2" for="star2"></label>
                    <input class="star-3" type="radio" name="star" id="star3">
                    <label class="star-3" for="star3"></label>
                    <input class="star-4" type="radio" name="star" id="star4">
                    <label class="star-4" for="star4"></label>
                    <input class="star-5" type="radio" name="star" id="star5">
                    <label class="star-5" for="star5"></label><span></span>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="comments" name="comment" cols="30" rows="10" data-max-length="200"></textarea>
                </div>
                <button class="btn btn-sm btn-primary" type="submit">Save Review</button>
              </form>
            </div>
          </div> --}}
        </div>
      </form>
    </div>
    <script>
    $(document).ready(function(){
        $('.pricing-btn1').click(function(){
          $('.pricing-btn1').addClass('pricing-hover');
          $('.pricing-btn2').removeClass('pricing-hover');
          $('.pricing-btn3').removeClass('pricing-hover');
            var price = $(this).data('price');
            var proid = $('.proid').val();
            
            $('.booking-now').click(function(){
              var addons = [];
              $('.addon').each(function(){
                if($(this).is(":checked"))
                {
                  addons.push($(this).val());
                }
              });
              addons = addons.toString();
              console.log(addons);
                  $.ajax({
                      type:"POST",
                      url: '/booking-product',
                      data:{
                          "proid":proid,
                          "amount": price,
                          "addon1": addons,
                          "_token": "{{ csrf_token() }}",
                      },
                      success:function(response){
                          console.log(response);
                      }

                  });
              });
            $('.add-ons').show("slow");
            $('.add-ons2').hide("slow");
            $('.add-ons3').hide("slow");
        });

        $('.pricing-btn2').click(function(){
          $('.pricing-btn2').addClass('pricing-hover');
          $('.pricing-btn1').removeClass('pricing-hover');
          $('.pricing-btn3').removeClass('pricing-hover');
            var price = $(this).data('price');
            var proid = $('.proid').val();
            $('.booking-now').click(function(){
              var addons = [];
              $('.addon').each(function(){
                if($(this).is(":checked"))
                {
                  addons.push($(this).val());
                }
              });
              addons = addons.toString();
              console.log(addons);
                  $.ajax({
                      type:"POST",
                      url: '/booking-product',
                      data:{
                          "proid":proid,
                          "amount": price,
                          "addon1": addons,
                          "_token": "{{ csrf_token() }}",
                      },
                      success:function(response){
                          console.log(response);
                      }

                  });
              });
              $('.add-ons').hide("slow");
            $('.add-ons2').show("slow");
            $('.add-ons3').hide("slow");
        });

        $('.pricing-btn3').click(function(){
          $('.pricing-btn3').addClass('pricing-hover');
          $('.pricing-btn1').removeClass('pricing-hover');
          $('.pricing-btn2').removeClass('pricing-hover');
            var price = $(this).data('price');
            var proid = $('.proid').val();
            $('.booking-now').click(function(){
              var addons = [];
              $('.addon').each(function(){
                if($(this).is(":checked"))
                {
                  addons.push($(this).val());
                }
              });
              addons = addons.toString();
              console.log(addons);
                  $.ajax({
                      type:"POST",
                      url: '/booking-product',
                      data:{
                          "proid":proid,
                          "amount": price,
                          "addon1": addons,
                          "_token": "{{ csrf_token() }}",
                      },
                      success:function(response){
                          console.log(response);
                      }

                  });
              });
              $('.add-ons').hide("slow");
              $('.add-ons2').hide("slow");  
            $('.add-ons3').show("slow");
        });
    });
    </script>
   @endsection