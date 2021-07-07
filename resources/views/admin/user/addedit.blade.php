@extends('admin.layout.index')
@section('user') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<form action="admin/user/{{ isset($data) ? 'edit/'.$data->id : 'add' }}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="text-right mb-3">
    <button type="reset" class="btn-warning mr-2"><i class="fas fa-arrow-left"></i> Back</button>
    <button type="reset" class="btn-danger mr-2"><i class="fas fa-sync"></i> Reset</button>
    <button type="submit" class="btn-success"><i class="far fa-save"></i> Save</button>
</div>
<div class="row">
    <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" value="{{ isset($user) ? $user->name : '' }}" type="text" placeholder="Name ..." class="form-control ">
                        </div>
                        <div class="form-group">
                            <label>Permission</label>
                            <select name='permission' class="form-control">
                                <option value="0">superadmin</option>
                                <option value="1">admin</option>
                                <option value="2">author</option>
                                <option value="3">member</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <input {{ isset($user) ? 'disabled' : '' }} name='email' value="{{ isset($user) ? $user->email : '' }}" type="text" placeholder="Email ..." class="form-control">
                                @if(!isset($user->email))
                                <div class="input-group-append"><span class="input-group-text">@gmail.com</span></div>
                                @endif
                            </div>
                        </div>
                        @if(isset($user))
                        <input type="checkbox" id='changepassword' name="changepassword" />  Edit password
                        <div class="form-group">
                            <label>Password</label>
                            <input disabled name="password" placeholder="Password" type="password" class="form-control pass">
                        </div>
                        <div class="form-group">
                            <label class="">Confirm password</label>
                            <input disabled name="passwordagain" placeholder="Confirm password" type="password" class="form-control pass">
                        </div>
                        @else
                        <div class="form-group">
                            <label>Password</label>
                            <input  name="password" placeholder="Password" type="password" class="form-control pass">
                        </div>
                        <div class="form-group">
                            <label class="">Confirm password</label>
                            <input  name="passwordagain" placeholder="Confirm password" type="password" class="form-control pass">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- @include('admin.layout.seooption') -->
    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="data/user/300/{{ isset($data) ? $data->img : 'no_image.jpg' }}" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection