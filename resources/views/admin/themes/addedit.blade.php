@extends('admin.layout.index')
@section('themes') menu-item-active @endsection
@section('content')
<div id="alerts">@include('admin.errors.alerts')</div>
<form action="admin/themes/<?php
if(isset($data)){
    if(isset($double)) echo 'add';
    else echo 'edit/'.$data->id;
}else{ echo 'add'; }
?>" method="POST" enctype="multipart/form-data" id="target">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="text-right mb-3">
    <button onclick="goBack()" type="button" class="btn-warning mr-2"><i class="fas fa-arrow-left"></i> Back</button>
    <button type="reset" class="btn-danger mr-2"><i class="fas fa-sync"></i> Reset</button>
    <!-- <button type="submit" id="other" class="btn-info mr-2"><i class="far fa-save"></i> Save</button> -->
    <button type="submit" id="save_back" class="btn-success"><i class="far fa-save"></i> Save & Back</button>
</div>
<div class="row">
    <div class="col-xl-8 col-lg-8">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label> 
                            <input value="{{ isset($data) ? $data->name : '' }}" name="name" placeholder="Name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>tit</label> 
                            <input value="{{ isset($data) ? $data->tit : '' }}" name="tit" placeholder="tit" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>note</label> 
                            <select name="note" class="form-control">
                                <option <?php if(isset($data) && $data->note == 'logo'){echo "selected";} ?> value="logo">logo</option>
                                <option <?php if(isset($data) && $data->note == 'logo ân bản'){echo "selected";} ?> value="logo ân bản">logo ân bản</option>
                                <option <?php if(isset($data) && $data->note == 'Slider'){echo "selected";} ?> value="Slider">slider</option>
                                <option <?php if(isset($data) && $data->note == 'Banner'){echo "selected";} ?> value="Banner">Banner</option>
                                <option <?php if(isset($data) && $data->note == 'Đối tác'){echo "selected";} ?> value="Đối tác">Đối tác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>link</label> 
                            <input value="{{ isset($data) ? $data->link : '' }}" name="link" placeholder="link" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>content</label>
                            <textarea rows="3" name="content" class="form-control">{{ isset($data) ? $data->content : '' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4">
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
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/themes/'.$data->img : 'data/no_image.jpg' }}" />
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

