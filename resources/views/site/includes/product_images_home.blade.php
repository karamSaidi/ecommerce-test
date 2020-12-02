@if(count($images) >= 2)
@foreach ($images->take(2) as $image)
<img class="img-fluid {{ $loop->index == 0? 'image-cover' : 'image-secondary'}}" src="{{ $image->image_url }}" alt=""
    data-full-size-image-url="{{ $image->image_url }}" width="600" height="600">
@endforeach
@elseif(count($images) == 1)
<img class="img-fluid image-cover" src="{{ $images->first()->image_url }}" alt=""
    data-full-size-image-url="{{ $images->first()->image_url }}" width="600" height="600">
<img class="img-fluid image-secondary" src="{{ $images->first()->image_url }}" alt=""
    data-full-size-image-url="{{ $images->first()->image_url }}" width="600" height="600">
@else
<img class="img-fluid image-cover" src="{{ asset('assets/site/images/products_defualt.png') }}" alt=""
    data-full-size-image-url="{{ asset('assets/site/images/products_defualt.png') }}" width="600" height="600">
<img class="img-fluid image-secondary" src="{{ asset('assets/site/images/products_defualt.png') }}" alt=""
    data-full-size-image-url="{{ asset('assets/site/images/products_defualt.png') }}" width="600" height="600">
@endif
