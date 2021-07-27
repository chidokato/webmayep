@if(count($errors) > 0)
	@foreach($errors->all() as $err)
    <div id="hidden" class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
        <div class="alert-icon">
            <i class="flaticon-warning"></i>
        </div>
        <div class="alert-text">{{$err}} !</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="ki ki-close"></i>
                </span>
            </button>
        </div>
    </div>
	@endforeach
@endif
@if(session('Error'))
    <div id="hidden" class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
        <div class="alert-icon">
            <i class="flaticon-warning"></i>
        </div>
        <div class="alert-text">{{session('Errors')}} !</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="ki ki-close"></i>
                </span>
            </button>
        </div>
    </div>
@endif
@if(session('Success'))
    <div id="hidden" class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
        <div class="alert-icon">
            <i class="las la-check-double"></i>
        </div>
        <div class="alert-text">{{session('Success')}} !</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="ki ki-close"></i>
                </span>
            </button>
        </div>
    </div>
@endif
