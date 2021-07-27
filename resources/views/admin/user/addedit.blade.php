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
                <h6 class="m-0 font-weight-bold text-primary">Thông tin người dùng</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input name="name" value="{{ isset($data) ? $data->name : '' }}" type="text" placeholder="Name ..." class="form-control ">
                        </div>
                        <div class="form-group">
                            <label>Quyền người dùng</label>
                            <select name='permission' class="form-control">
                                <option value="0">superadmin</option>
                                <option value="1">admin</option>
                                <option value="2">author</option>
                                <option value="3">member</option>
                            </select>
                        </div>
                        @if(isset($data))
                        <div class="form-group">
                            <div class="edit_pass"><label>Mật khẩu</label> <label class="cursor_pointer"><input type="checkbox" id='changepassword' name="changepassword" />  <strong>EDIT</strong> </label></div>
                            <input disabled name="password" placeholder="Password" type="password" class="form-control pass">
                        </div>
                        <div class="form-group">
                            <label class="">Nhập lại mật khẩu</label>
                            <input disabled name="passwordagain" placeholder="Confirm password" type="password" class="form-control pass">
                        </div>
                        @else
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input  name="password" placeholder="Password" type="password" class="form-control pass">
                        </div>
                        <div class="form-group">
                            <label class="">Nhập lại mật khẩu</label>
                            <input  name="passwordagain" placeholder="Confirm password" type="password" class="form-control pass">
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Họ & Tên</label>
                            <input name="your_name" value="{{ isset($data) ? $data->your_name : '' }}" placeholder="your name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ email</label>
                            <div class="input-group">
                                <input name='email' value="{{ isset($data) ? $data->email : '' }}" type="text" placeholder="Email ..." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <div class="input-group">
                                <input name='phone' value="{{ isset($data) ? $data->phone : '' }}" type="text" placeholder="phone ..." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <div class="input-group">
                                <input type="date" value="{{ isset($data) ? $data->birthday : '' }}" name="birthday" placeholder="Ngày sinh ..." class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Link facebook</label>
                            <div class="input-group">
                                <input name='facebook' value="{{ isset($data) ? $data->facebook : '' }}" type="text" placeholder="facebook ..." class="form-control">
                            </div>
                        </div>
                        
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
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/user/'.$data->avatar : 'data/no_image.jpg' }}" />
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

<script>

</script>

@endsection