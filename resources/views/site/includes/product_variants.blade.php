@if(isset($product_attributes) && $product_attributes)
<div class="product-variants in_border">

    @foreach($product_attributes as $attribute)
    <div class="product-variants-item">
        <span class="control-label">{{ $attribute->name }} : </span>
        <select id="group_{{ $attribute->id }}" data-product-attribute="1"
            name="group[{{ $attribute->id }}]">
            @foreach ($attribute->options as $option)
            <option value="{{ $option->id }}" title="{{ $option->name }}">
                {{ $option->name }}</option>
            @endforeach

        </select>
    </div>
    @endforeach

</div>
@endif
