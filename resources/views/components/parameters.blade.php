
@props(['params','title'])

<section class="d-flex pt-3 pb-3">
    <h3 class="product-params-title">{{ $title }}</h3>
    <ul class="product-param-list list-unstyled mb-0">

@foreach($params as $key => $param)
    <li class="d-flex">
        <div class="param-key">
            <span class="param-block">{{ $key }}</span>
        </div>
        <div class="param-value">
            <span class="param-block">{{ $param }}</span>
        </div>
    </li>
@endforeach


    </ul>
</section>
