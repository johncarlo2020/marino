<section class="container product-container py-5">
    @include('section.heading')
    <p class="product-information">
        {{$description}}
    </p>
    <p class="hook-text">
        LOAD NOW, PAY LATER!
    </p>
      <div class="product-slide pb-4">
        @foreach ($products as $product)
        <div class="card border ">
            <img src="{{ $product['image'] }}" width="80">
            <div class="details">
                <p class="product-type">{{ $product['product-type'] }}</p>
                <p class="product-name">{{ $product['product-name'] }}</p>
                <div class="product-description">
                    <ul>
                        @foreach ($product['product-details'] as $detail)
                        <li>{{ $detail }}</li>
                        @endforeach
                    </ul>
                </div>
                <p class="price">&#x20B1;{{ $product['price'] }} only</p>
                <p class="reloadable">{{ $product['reaload'] }}</p>
                <a href="{{ $product['shopUrl'] }}" class="btn custom-btn dark-blue w-100">
                    {{ $buyNowText }}
                </a>
            </div>
        </div>
        @endforeach
    </div>


</section>

