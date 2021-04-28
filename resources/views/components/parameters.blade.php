
@props(['params','content'])
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
