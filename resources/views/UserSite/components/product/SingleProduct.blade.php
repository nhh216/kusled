<div class="inner-slide">
    <div class="single-product">
        <div class="product-img">
            <a href="{{ $product->slug }}_{{ $product->id }}"
               tabindex="0">
                <img class="primary-img"
                     style="max-width: 500px"
                     src="{{ isset($product->images[0]) ? asset($product->images[0] -> link) : "" }}"
                     data-src="{{ isset($product->images[0]) ? asset($product->images[0] -> link) : "" }}"
                     alt="{{ $product->name }}">
            </a>
        </div>
        <div class="product-content">
            <div class="product-desc_info">
                <div class="rating-box">
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span
                        class="text-red big-small">(Lượt xem: 15.941)</span>
                    <span class="text-red big-small">Đã bán 174</span>
                </div>
                <h6 class="title_name"><a class="product-name"
                                          href="{{ $product->slug }}_{{ $product->id }}"
                                          tabindex="0">{{ $product->name }}</a></h6>
                <div class="price-box">
                    <span class="new-price new-price-2">{{ getSalePrice($product->price, $product->discount) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
