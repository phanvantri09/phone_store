<?php
use App\Models\Product;
$pro = Product::all();
?>
@extends('page.index')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Product {{$data->name}} </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row" style="margin-top: 30px; margin-bottom: 30px">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{ asset("/imgUploads/$data->img1")}}" alt="">
                                </div>
                                <div class="product-gallery">
                                    @if (!empty($data->img2))
                                    <img src="{{ asset("/imgUploads/$data->img2")}}" alt="">
                                    @endif
                                    @if (!empty($data->img3))
                                    <img src="{{ asset("/imgUploads/$data->img3")}}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$data->name}}</h2>
                                <div class="product-inner-price">
                                    <ins>${{$data->price}}</ins> <del>${{$data->price - 100}}</del>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    @auth
                                        <a href="{{ route('home.addcart', [Auth::user()->id,$data->id]) }}"><button class="add_to_cart_button" type="submit">Add to cart</button></a>
                                    @else
                                    <a href="{{ route('home.login') }}"><button class="add_to_cart_button" type="submit">Add to cart</button></a>

                                    @endauth
                                </form>

                                <div class="product-inner-category">
                                    <p>Amount: {{$data->amount}}</p>
                                </div>

                                <div role="tabpanel">

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
                                            <p>{{$data->general}}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            @foreach ($pro as $p)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                                    <div class="product-hover">
                                        @auth
                                        <a href="{{ route('home.themcart', [Auth::user()->id,$p->id]) }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        @else
                                        <a href="{{ route('home.login') }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        @endauth
                                        <a href="{{ route('home.product', $p->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>${{$p->price}}</ins> <del>${{$p->price-100}}</del>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="container">
        <div class="row">
        <h2>Feedback</h2>
        <table width="100%" border="0">
          <div class="col-md-9 col-md-offset-0">
            <tr><td width="77%">
            <div class="">
              <form class="form-horizontal" action="send.php" method="post">
              <fieldset>

                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Full Name</label>
                  <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                  </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">Your E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>

                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Your message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
                  </div>
                </div>


                <!-- Rating -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Your rating</label>
                  <div class="col-md-9">
                    <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                  </div>
                </div>
        </td>
        <td align="center" valign="top" width="23%">
                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-center">
                    <img src="http://www.gohacking.com/wp-content/uploads/2010/06/captcha-300x171.jpg" height="140px" width="270px"/><br/>
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    <button type="reset" class="btn btn-default btn-md">Clear</button>
                  </div>
                </div>
              </fieldset>
              </form>
            </div>
        </div>
        </td>
        </tr>
        </table>
    </div> --}}

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Demo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../navbar/">Default</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">

          <div class="row">
              <div class="col-sm-3">
                  <div class="rating-block">
                      <h4>Average user rating</h4>
                      <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                      <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </button>
                  </div>
              </div>
              <div class="col-sm-3">
                  <h4>Rating breakdown</h4>
                  <div class="pull-left">
                      <div class="pull-left" style="width:35px; line-height:1;">
                          <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                      </div>
                      <div class="pull-left" style="width:180px;">
                          <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                              <span class="sr-only">80% Complete (danger)</span>
                            </div>
                          </div>
                      </div>
                      <div class="pull-right" style="margin-left:10px;">1</div>
                  </div>
                  <div class="pull-left">
                      <div class="pull-left" style="width:35px; line-height:1;">
                          <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                      </div>
                      <div class="pull-left" style="width:180px;">
                          <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                              <span class="sr-only">80% Complete (danger)</span>
                            </div>
                          </div>
                      </div>
                      <div class="pull-right" style="margin-left:10px;">1</div>
                  </div>
                  <div class="pull-left">
                      <div class="pull-left" style="width:35px; line-height:1;">
                          <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                      </div>
                      <div class="pull-left" style="width:180px;">
                          <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                              <span class="sr-only">80% Complete (danger)</span>
                            </div>
                          </div>
                      </div>
                      <div class="pull-right" style="margin-left:10px;">0</div>
                  </div>
                  <div class="pull-left">
                      <div class="pull-left" style="width:35px; line-height:1;">
                          <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                      </div>
                      <div class="pull-left" style="width:180px;">
                          <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                              <span class="sr-only">80% Complete (danger)</span>
                            </div>
                          </div>
                      </div>
                      <div class="pull-right" style="margin-left:10px;">0</div>
                  </div>
                  <div class="pull-left">
                      <div class="pull-left" style="width:35px; line-height:1;">
                          <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                      </div>
                      <div class="pull-left" style="width:180px;">
                          <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                              <span class="sr-only">80% Complete (danger)</span>
                            </div>
                          </div>
                      </div>
                      <div class="pull-right" style="margin-left:10px;">0</div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-12">
                  <hr/>
                  <div class="review-block">
                    @foreach ($reviews as $re)

                      <div class="row">
                          <div class="col-sm-3">
                              {{-- <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"> --}}
                              <div class="review-block-name"><a href="#">{{ $re->user->email }}</a></div>
                              <div class="review-block-date">{{$re->created_at}}<br/></div>
                          </div>
                          <div class="col-sm-9">
                              <div class="review-block-rate">
                                @for ($i=1 ; $i <= $re->count; $i++ )
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                @endfor
                                @for ($re->count ; $i <= 5; $i++ )
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                @endfor
                                  {{-- <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                  </button>
                                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                  </button>
                                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                  </button> --}}
                              </div>
                              {{-- <div class="review-block-title">this was nice in buy</div> --}}
                              <div class="review-block-description">{{ $re->content }}</div>
                          </div>
                      </div>
                      <hr/>
                    @endforeach


                  </div>
              </div>
          </div>

      </div> <!-- /container -->


      <div class="container">
        <div class="row" style="margin-top:40px;">
            <div class="col-md-12">
            <div class="well well-sm">
                <div class="row" id="post-review-box" >
                    <div class="col-md-12">
                        <form accept-charset="UTF-8" action="{{ route('review') }}" method="post">
                          @csrf
                            <input id="ratings-hidden" name="id_product" value="{{ $data->id }}" type="hidden">

                            <div class="col-sm-3">
                              <h4>Choose Rating :</h4></h4>
                              <div class="pull-left " style="display: flex; justify-content: center; align-items: center;">
                                  <div class="pull-left" style="width:35px; line-height:1; ">
                                      <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                                  </div>
                                  <div class="pull-left" style="width:180px;">
                                      <div class="progress" style="height:9px; margin:8px 0;">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="pull-right" style="margin-left:10px;"><input type="radio" id="count" name="count" value="5"></div>
                              </div>
                              <div class="pull-left"  style="display: flex; justify-content: center; align-items: center;">
                                  <div class="pull-left" style="width:35px; line-height:1;">
                                      <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                                  </div>
                                  <div class="pull-left" style="width:180px;">
                                      <div class="progress" style="height:9px; margin:8px 0;">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="pull-right" style="margin-left:10px;"><input type="radio" id="count" name="count" value="4"></div>
                              </div>
                              <div class="pull-left"  style="display: flex; justify-content: center; align-items: center;">
                                  <div class="pull-left" style="width:35px; line-height:1;">
                                      <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                                  </div>
                                  <div class="pull-left" style="width:180px;">
                                      <div class="progress" style="height:9px; margin:8px 0;">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="pull-right" style="margin-left:10px;"><input type="radio" id="count" name="count" value="3"></div>
                              </div>
                              <div class="pull-left"  style="display: flex; justify-content: center; align-items: center;">
                                  <div class="pull-left" style="width:35px; line-height:1;">
                                      <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                                  </div>
                                  <div class="pull-left" style="width:180px;">
                                      <div class="progress" style="height:9px; margin:8px 0;">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="pull-right" style="margin-left:10px;"><input type="radio" id="count" name="count" value="2"></div>
                              </div>
                              <div class="pull-left"  style="display: flex; justify-content: center; align-items: center;">
                                  <div class="pull-left" style="width:35px; line-height:1;">
                                      <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                                  </div>
                                  <div class="pull-left" style="width:180px;">
                                      <div class="progress" style="height:9px; margin:8px 0;">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="pull-right" style="margin-left:10px;"><input type="radio" id="count" name="count" value="1"></div>
                              </div>
                          </div>
                          <br> <br>
                            <textarea class="form-control animated" cols="50" id="new-review" name="content" placeholder="Nhập nội dung đánh giá tại đây..." rows="5"></textarea>
                            {{-- <div>
                                <input type="file">
                                <label for="">Choose Image</label>
                            </div> --}}

                            <div class="text-right">
                                <br>
                                <button class="btn btn-success btn-lg" type="submit">Đánh giá</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>


</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
