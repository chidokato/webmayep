@extends('admin.layout.index')
@section('setting') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<form action="admin/setting/edit/{{$data['id']}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="text-right mb-3">
    <button type="reset" class="btn-warning mr-2"><i class="fas fa-arrow-left"></i> Back</button>
    <button type="reset" class="btn-danger mr-2"><i class="fas fa-sync"></i> Reset</button>
    <button type="submit" class="btn-success"><i class="far fa-save"></i> Save</button>
</div>
<style type="text/css">
    .nav .active{text-decoration: underline;}
    .nav li{margin-right: 30px}
</style>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav">
                    <li><a class="active font-weight-bold text-primary" data-toggle="tab" href="#home">Thông tin cơ bản</a></li>
                    <li><a class="font-weight-bold text-primary" data-toggle="tab" href="#menu1">Mạng xã hội</a></li>
                    <li><a class="font-weight-bold text-primary" data-toggle="tab" href="#menu2">Cấu hình SEO</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="home" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label >Name</label>
                                <input value="{!! old('name'), isset($data['name'])?$data['name']:null !!}" name='name' type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Address</label>
                                <input value="{!! old('address'), isset($data['address'])?$data['address']:null !!}" name='address' type="text" placeholder="address" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Email</label>
                                <input value="{!! old('email'), isset($data['email'])?$data['email']:null !!}" name='email' type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Hotline</label>
                                <input value="{!! old('hotline'), isset($data['hotline'])?$data['hotline']:null !!}" name='hotline' type="text" placeholder="hotline" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Tel</label>
                                <input value="{!! old('hotline1'), isset($data['hotline1'])?$data['hotline1']:null !!}" name='hotline1' type="text" placeholder="Tel" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Facebook</label>
                                    <input value="{!! old('facebook'), isset($data['facebook'])?$data['facebook']:null !!}" name='facebook' type="text" placeholder="facebook" class="form-control">
                                </div>
                                <!-- <div class="form-group">
                                    <label >google plus</label>
                                    <input value="{!! old('googleplus'), isset($data['googleplus'])?$data['googleplus']:null !!}" name='googleplus' type="text" placeholder="googleplus" class="form-control">
                                </div> -->
                                <div class="form-group">
                                    <label >youtube</label>
                                    <input value="{!! old('youtube'), isset($data['youtube'])?$data['youtube']:null !!}" name='youtube' type="text" placeholder="youtube" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >twitter</label>
                                    <input value="{!! old('twitter'), isset($data['twitter'])?$data['twitter']:null !!}" name='twitter' type="text" placeholder="twitter" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Google maps</label>
                                    <textarea name="maps" class="form-control">{!! old('maps'), isset($data['maps'])?$data['maps']:null !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input value="{{ isset($data) ? $data->title : '' }}" id="title" onkeyup="changetitle(this);" name='title' type="text" placeholder="70 characters left" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Description</label>
                                    <input value="{{ isset($data) ? $data->description : '' }}" id="description" onkeyup="change(this);" name='description' type="text" placeholder="170 characters left" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label>keywords</label>
                                    <input value="{{ isset($data) ? $data->keywords : '' }}" name='keywords' type="text" placeholder="keywords ..." class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Robots</label>
                                    <select name='robot' class="form-control">
                                        <option <?php if(isset($data) && $data->robot=='index, follow'){echo "selected";} ?> value="index, follow">index, follow</option>
                                        <option <?php if(isset($data) && $data->robot=='noindex, nofollow'){echo "selected";} ?> value="noindex, nofollow">noindex, nofollow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Code header</label>
                                <textarea class="form-control form-control" id="message" name="codeheader" rows="10" placeholder="Code header">{!! $data['codeheader'] !!}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label >Code body</label>
                                <textarea class="form-control form-control" id="message" name="codebody" rows="10" placeholder="Code body">{!! $data['codebody'] !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection