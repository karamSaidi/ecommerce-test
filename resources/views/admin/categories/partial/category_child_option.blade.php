@foreach ($childs as $child)

<option value="{{$child->id}}" @if(old('parent_id', $parent_id)==$child->id) selected @endif>
    @for ($i = 0; $i < $sperator; $i++) - @endfor {{$child->name}} </option> <!-- end main options -->

        @if($child->childs->count() > 0)
        @include('admin.categories.partial.category_child_option', [
        'childs' =>$child->childs, 'sperator' => $sperator+ 1, 'parent_id' => $parent_id,])
        @endif

        @endforeach
