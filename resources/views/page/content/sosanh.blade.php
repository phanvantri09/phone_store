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
                    <h2>Product {{$product->name}} </h2>
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
            {{-- <div class="col-md-6">
                <div class="product-content-right">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{ asset("/imgUploads/$product->img1")}}" alt="">
                                </div>
                                <div class="product-gallery">
                                    @if (!empty($product->img2))
                                    <img src="{{ asset("/imgUploads/$product->img2")}}" alt="">
                                    @endif
                                    @if (!empty($product->img3))
                                    <img src="{{ asset("/imgUploads/$product->img3")}}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="product-inner">
                                <h2 class="product-name">{{$product->name}}</h2>
                                <div class="product-inner-price">
                                    <ins>${{$product->price}}</ins> <del>${{$product->price - 100}}</del>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    @auth
                                        <a href="{{ route('home.addcart', [Auth::user()->id,$product->id]) }}"><button class="add_to_cart_button" type="submit">Add to cart</button></a>
                                    @else
                                    <a href="{{ route('home.login') }}"><button class="add_to_cart_button" type="submit">Add to cart</button></a>

                                    @endauth
                                </form>

                                <div class="product-inner-category">
                                    <p>Amount: {{$product->amount}}</p>
                                </div>

                                <div role="tabpanel">

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
                                            <p>{{$product->general}}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div> --}}
            <div class="col-md-12">
                {{-- <div class="product-content-right">
                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            @foreach ($pro as $p)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                                    <div class="product-hover">

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
                </div> --}}

                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Products list </h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Search here: (by name)</label>
                                    <input type="text" class="form-controller" id="search" name="search"></input>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Img</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Content</th>
                                            <th>Amount</th>
                                        </tr>
                                        <tr style="background-color: rgb(151, 148, 148)">
                                            <td><img src="{{ asset("/imgUploads/$product->img1")}}" alt=""></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            {{-- <td><a href="{{ route('sosanhby', ['id'=>$product->id, 'id_sosanh'=>$product1->id]) }}"></a></td> --}}
                                            <td>{{$product->general}}</td>
                                            <td>{{$product->amount}}</td>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if ($productAll)
                                        @foreach ($productAll as $product1)
                                            <tr>
                                                <td><img src="{{ asset("/imgUploads/$product1->img1")}}" alt=""></td>
                                                <td>{{$product1->name}}</td>
                                                <td>{{$product1->price}}</td>
                                                {{-- <td><a href="{{ route('sosanhby', ['id'=>$product->id, 'id_sosanh'=>$product1->id]) }}"></a></td> --}}
                                                <td>{{$product1->general}}</td>
                                                <td>{{$product1->amount}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">

        </div>
    </div> --}}

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('search') }}',
            data: {
                'search': $value
            },
            success:function(data){
                $('tbody').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

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
