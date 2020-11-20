<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            <i class="la la-list"></i>
            {{__('admin/menu.options_list')}}
        </h4>

    </div>
    <div class="card-content collapse show">
        <div class="card-body card-dashboard">

            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr role="row">
                                <th>{{__('general.attributes')}}</th>
                                <th>{{__('general.options')}}</th>
                                <th>{{__('general.price')}}</th>
                                <th>{{__('general.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($options as $option)
                            <tr role="row" class="odd">
                                <td>{{$option->attribute->name}}</td>
                                <td>{{$option->name}}</td>
                                <td>{{$option->price}}</td>

                                <td>
                                    <div class="btn-group">

                                        <a href="{{route('admin.products_options.edit', $option->id)}}"
                                            class="btn btn-outline-info btn-sm">
                                            <i class="la la-edit"></i>
                                        </a>
                                        {{-- <form action="{{route('admin.products.options.destroy', $option->id)}}" method="post"
                                            class="form-delete">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

