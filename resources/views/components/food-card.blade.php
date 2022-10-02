@props(['food'])
<div
    class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
    <div class="product-item">
        <div class="product-img">
            <a
                href="foods/{{ $food->id }}">
                <img width="260" height="260"
                    src="/images/{{ $food->image }}"
                    class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                    alt="NHO XANH"

                    sizes="100vw"> </a>
        </div>
        <div class="product-info">
            <div class="product-title">
                <a
                    href="foods/{{ $food->id }}">{{ $food->name }}</a>
            </div>
            <div class="product-price clearfix">
                @if ($food->sale_price > 0)
                    <span class="current-price"><span
                            class="woocommerce-Price-amount amount">{{ $food->sale_price }}<span
                                class="woocommerce-Price-currencySymbol">₫</span></span></span>
                @endif
                <span class="original-price"><s
                        style="text-decoration-line: {{ $food->sale_price > 0 ? 'line-through' : 'none' }}"><span
                            class="woocommerce-Price-amount amount">{{ $food->price }}<span
                                class="woocommerce-Price-currencySymbol">₫</span></span></s></span>
            </div>
            <div
                class="product-actions text-center clearfix">
                <a
                    href="foods/{{ $food->id }}">
                    <button type="button"
                        class="btn-buyNow buy-now medium--hide small--hide"
                        data-id="1026777806">Chi
                        tiết</button>
                </a>
            </div>
        </div>
    </div>
</div>
