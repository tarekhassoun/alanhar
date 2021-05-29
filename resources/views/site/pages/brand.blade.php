@extends('site.app')

@section('title', $brand->name . ' Products')

@section('content')

<section class="section-content bg padding-y">
    <div class="container">
        <img
            class="mx-auto d-block mb-3"
            src="{{ asset('storage/' . $brand->logo) }}"
            style="max-height: 300px; max-width: 300px;" />

        <div class="row">
            @forelse ($brand->products as $product)
                <div class="col-md-3">
                    <figure class="card card-product">
                        @if ($product->images->count() > 0)
                            <div class="img-wrap padding-y">
                                <img src="{{ asset('storage/' . $product->images->first()->full) }}" alt="" />
                            </div>
                        @else
                            <div class="img-wrap padding-y">
                                <img src="https://via.placeholder.com/176" alt="" />
                            </div>
                        @endif

                        <figcaption class="info-wrap">
                            <h4 class="title">
                                <a class="link-green" href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                            </h4>
                        </figcaption>

                        <div class="bottom-wrap">
                            <a
                                href="{{ route('product.show', $product->slug) }}"
                                class="btn btn-sm btn-green float-right"
                            >View Details</a>
                            @if ($product->sale_price != 0)
                                <div class="price-wrap h5">
                                    <span class="price">{{ config('settings.currency_symbol').$product->sale_price }}</span>
                                    <del class="price-old">{{ config('settings.currency_symbol').$product->price }}</del>
                                </div>
                            @else
                                <div class="price-wrap h5">
                                    <span class="price"> {{ config('settings.currency_symbol').$product->price }} </span>
                                </div>
                            @endif
                        </div>
                    </figure>
                </div>
            @empty
                <p>No Products found in {{ $brand->name }}.</p>
            @endforelse
        </div>
    </div>
</section>

@stop
