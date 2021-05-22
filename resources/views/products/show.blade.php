 @extends('layouts.myapp')

 @section('content')


 <section class="breadcrumb-section set-bg" data-setbg="/shop/images/products/small/products-06.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Products hot</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="/shop/images/products/small/products-06.png" alt="">
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="product__details__text">
                        <h3>{{ $product->name }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">${{ $product->price }}</div>
                        <p>{{ $product->description }}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" class="product-quantity" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#"  class="primary-btn add-to-card" data-product_id="{{ $product->id }}">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>

                        @if(auth()->id() == $product->user_id)
                        <p>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="primary-btn">Edit</a>
                        </p>
                        <p>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="primary-btn">Delete</button>
                            </form>

                        </p>
                        @endif

       
    </section>

@endsection