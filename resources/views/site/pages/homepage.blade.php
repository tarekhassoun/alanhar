@extends('site.app')

@section('title', 'Homepage')

@section('content')
<section class="section-content bg padding-y">
    <div class="container">
        <div class="row">
            <div id="home-banner-carousel" class="carousel slide mb-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-banner-carousel" data-slide-to="1"></li>
                    <li data-target="#home-banner-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <img src="{{ asset('frontend/images/carousel/1.png') }}" class="d-block w-100" />
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="{{ asset('frontend/images/carousel/2.png') }}" class="d-block w-100" />
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="{{ asset('frontend/images/carousel/3.png') }}" class="d-block w-100" />
                        </a>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#home-banner-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-banner-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <h2 class="text-green">Latest products</h2>
        <div class="row mb-4">
            @foreach ($best_products as $bproduct)
                <div class="col-md-3">
                    <figure class="card card-product">
                        @if ($bproduct->images->count() > 0)
                            <div class="img-wrap padding-y">
                                <img src="{{ asset('storage/' . $bproduct->images->first()->full) }}" alt="" />
                            </div>
                        @else
                            <div class="img-wrap padding-y">
                                <img src="https://via.placeholder.com/176" alt="" />
                            </div>
                        @endif

                        <figcaption class="info-wrap">
                            <h4 class="title">
                                <a class="link-green" href="{{ route('product.show', $bproduct->slug) }}">{{ $bproduct->name }}</a>
                            </h4>
                        </figcaption>

                        <div class="bottom-wrap">
                            <a
                                href="{{ route('product.show', $bproduct->slug) }}"
                                class="btn btn-sm btn-green float-right"
                            >View Details</a>
                            @if ($bproduct->sale_price != 0)
                                <div class="price-wrap h5">
                                    <span class="price">{{ config('settings.currency_symbol') . $bproduct->sale_price }}</span>
                                    <del class="price-old">{{ config('settings.currency_symbol') . $bproduct->price }}</del>
                                </div>
                            @else
                                <div class="price-wrap h5">
                                    <span class="price"> {{ config('settings.currency_symbol') . $bproduct->price }} </span>
                                </div>
                            @endif
                        </div>
                    </figure>
                </div>
            @endforeach
        </div>


        <h2 class="text-green">Our best sellers</h2>
        <div class="row mb-4">
            @foreach ($best_products as $bproduct)
                <div class="col-md-3">
                    <figure class="card card-product">
                        @if ($bproduct->images->count() > 0)
                            <div class="img-wrap padding-y">
                                <img src="{{ asset('storage/' . $bproduct->images->first()->full) }}" alt="" />
                            </div>
                        @else
                            <div class="img-wrap padding-y">
                                <img src="https://via.placeholder.com/176" alt="" />
                            </div>
                        @endif

                        <figcaption class="info-wrap">
                            <h4 class="title">
                                <a class="link-green" href="{{ route('product.show', $bproduct->slug) }}">{{ $bproduct->name }}</a>
                            </h4>
                        </figcaption>

                        <div class="bottom-wrap">
                            <a
                                href="{{ route('product.show', $bproduct->slug) }}"
                                class="btn btn-sm btn-green float-right"
                            >View Details</a>
                            @if ($bproduct->sale_price != 0)
                                <div class="price-wrap h5">
                                    <span class="price">{{ config('settings.currency_symbol') . $bproduct->sale_price }}</span>
                                    <del class="price-old">{{ config('settings.currency_symbol') . $bproduct->price }}</del>
                                </div>
                            @else
                                <div class="price-wrap h5">
                                    <span class="price"> {{ config('settings.currency_symbol') . $bproduct->price }} </span>
                                </div>
                            @endif
                        </div>
                    </figure>
                </div>
            @endforeach
        </div>


        <h2 class="text-green">Categories</h2>
        <div class="row mb-4">
            @foreach ($categories as $cate)
                @foreach ($cate->items as $category)
                    <a class="col-md-3 text-center" href="{{ route('category.show', $category->slug) }}">
                        <img src="{{ asset('storage/' . $category->image) }}" />
                        <br />
                        {{ $category->name }}
                    </a>
                @endforeach
            @endforeach
        </div>


        <h2 class="text-green">Our brands</h2>
        <div class="row mb-4">
            @foreach ($brands as $brand)
                <a href="{{ route('brand.show', $brand->slug) }}">
                    <div class="col-4">
                        <img src="{{ asset('storage/' . $brand->logo) }}" />

                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@stop
