<div class="row">
    <div class="col-12">

        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session()->get('error')}}</strong>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session()->get('success')}}</strong>
        </div>
        @endif
    </div>
</div>


@push('scripts')
<script>
    // $(".alert").alert();
    $(".alert").show(1000).delay(5000).hide(1000);

</script>
@endpush