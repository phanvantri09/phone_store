
@extends('page.index')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <form action="{{ route('filter') }}" method="post"  class="row product-big-title-area" style="margin-bottom: 5px; padding: 10px 10px; border-radius: 5px; ">
            @csrf
            <input type="hidden" name="id" value="{{$id}}" id="">
            <div class="col-md-6" style=" ">
                <div style="display: flex">
                    Min price:
                    <input type="number" name="min"/>
                    Max price:
                    <input type="number" name="max"/>

                </div>

            </div>
            <div class="col-md-2" style=" ">
                <label for="">Sort</label>
                <select name="sorf" id="sorf">
                    <option value=""></option>
                    <option value="2">Price go down</option>
                    <option value="3">Price go up</option>
                </select>
            </div>

            <div class="col-md-2" style=" ">
                <label for="">Type</label>
                <select name="level" id="level">
                    <option value="5"></option>
                    @foreach ($category as $ca)
                    <option value="{{ $ca->id}}">{{$ca->name}}</option>
                    @endforeach

                </select>

            </div>
            <div class="col-md-1">
                <button type="submit">Filter</button>
            </div>
        </form>
        <div class="row">

            @auth
            @foreach ($data as $p)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                    </div>
                    <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>
                    <div class="product-carousel-price">
                        <ins>${{$p->price}}</ins> <del>${{$p->price+1000}}</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ route('home.themcart', [Auth::user()->id,$p->id]) }}">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @foreach ($data as $p)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                    </div>
                    <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>
                    <div class="product-carousel-price">
                        <ins>${{$p->price}}</ins> <del>${{$p->price+1000}}</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ route('home.register') }}">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
    <div style="display: flex; justify-content: center;">
        {{$data->appends(request()->all())->links()}}
    </div>
</div>
<script type="text/javascript">
    function filter_data(){
                $('.filter_data').html('<div id="loading"></div>');
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var cat = $('#name').val();
                var level = $('#level').val();
                var sorrt = $('#sorrt').val();
                $.ajax({
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/products',
                        type: 'get',
                        data: {minimum_price:minimum_price, maximum_price:maximum_price, name:name, level:level, orderby:orderby},
                        success:function(data){
                            $('.filter_data').html(data);
                        }
                });
            }
</script>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
