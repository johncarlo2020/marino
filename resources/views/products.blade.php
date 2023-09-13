@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="container product-page-title page-title-container">
    @include('section.heading',['heading' => $pruductsHeading])
    <p class="product-information">
        {{$productSectionDescription}}
    </p>
</div>
<div class="container product-list-details my-5">
    @foreach ($productsList as $set => $product)
    <div class="item border p-3 p-lg-5 rounded">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="  mb-4 mb-md-4 mb-lg-0">
                    <img src="{{ $product['image'] }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md- col-lg-7">
                <h2 class="fw-bold product-name">{{ $product['name'] }} <span class="bg-primary rounded-pill fw-normal px-3 py-1 fs-6 text-white">{{ $product['type'] }}</span></h2>
                <div class="d-lg-flex d-block gap-3 align-items-center my-3">
                    <h3 class="fw-bold mb-3 mb-md-0">&#8369; {{ $product['price'] }} only</h3>
                    <a href="{{ $product['link'] }}" class="btn custom-btn outline-gold rounded-pill">
                        {{ $buyNowText }}
                    </a>
                </div>
                <p class="mb-2 fw-bold">Supported Countries :</p>
                <p class="mb-3">{{ $product['countries'] }}</p>
                <p class="mb-2 fw-bold">Notes:</p>
                <p>{{ $product['notes'] }}</p>
                <div class="accordion mt-4" id="accordion{{$set}}">
                    @foreach ($product['accordion'] as $index => $accordionItem)
                        @if ($accordionItem['visibility'])
                            <div class="accordion-item" id="heading{{ $index }}">
                                <h2 class="accordion-header" >
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                        {{ $accordionItem['title'] }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordion{{$set}}">
                                    <div class="accordion-body">
                                        {{ $accordionItem['content'] }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection


