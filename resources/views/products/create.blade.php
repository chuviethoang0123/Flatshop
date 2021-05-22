@extends('layouts.myapp')

@section('content')

<section class="breadcrumb-section set-bg" data-setbg="/shop/images/products/small/products-06.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>products hot</h2>
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
            <div class="checkout__form">
                <h4>Create Product</h4>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/products" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text" name="name" value="{{ old('name') }}">
                            </div>


                            <div class="checkout__input">
                                <p>Price<span>*</span></p>
                                <input type="text" name="price" value="{{ old('price') }}">
                            </div>
                            <div class="checkout__input">
                                <p>Quantity<span>*</span></p>
                                <input type="text" class="checkout__input__add" name="quantity" value="{{ old('quantity') }}">
                            </div>

                            <div class="checkout__input">
                                <p>Description</p>
                                <textarea placeholder="Product detail" name="description">
                                    {{ old('description') }}
                                </textarea>
                            </div>

                            <div class="checkout__input text-center">
                                <button type="submit" class="site-btn">Create</button>
                            </div>
                       
                       
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>

@endsection