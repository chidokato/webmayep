@extends('admin.layout.index')
@section('product') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<form action="admin/product/<?php
if(isset($data)){
    if(isset($double)) echo 'add';
    else echo 'edit/'.$data->id;
}else{ echo 'add'; }
?>" method="POST" enctype="multipart/form-data" id="target">
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
                <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
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
                            <label style="display: flex;">Tên sản phẩm</label> 
                            <input value="{{ isset($data) ? $data->name : '' }}" name="name" placeholder="Name" type="text" class="form-control">
                            {!! isset($data) ? '
                            <input value="'.$data->slug.'" name="slug" placeholder="slug" type="text" class="slug">
                            ' : '' !!}
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <textarea rows="3" name="detail" class="form-control">{{ isset($data) ? $data->detail : '' }}</textarea>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="tab">
                            <button type="button" class="tablinks active" onclick="openCity(event, 'London')">Thông số kỹ thuật</button>
                            <button type="button" class="tablinks" onclick="openCity(event, 'Paris')">Nội dung chi tết</button>
                        </div>
                        <div id="London" class="tabcontent" style="display: block;">
                            <textarea name="detail" class="form-control ckeditor" id="ckeditor">{{ isset($data) ? $data->detail : '' }}</textarea>
                        </div>
                        <div id="Paris" class="tabcontent">
                            <textarea name="content" class="form-control ckeditor1" id="ckeditor1">{{ isset($data) ? $data->content : '' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.seooption')
    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tùy chọn</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <select name='category_id' class="form-control select2">
                        <option value="">-- Select --</option>
                        @if(isset($data))
                        <?php addeditcat ($category,0, $str='',$data['category_id']) ?>
                        @else
                        <?php addeditcat ($category,0,$str='',old('parent')); ?>
                        @endif
                    </select>
                </div>

                <!-- <div class="form-group"> -->
                    <!-- <select name='category_sku[]' class="form-control select2" multiple="">
                        <option value="">-- Select --</option>
                        @foreach($category as $val)
                        <option <?php //if(isset($data) && in_array($val->sku, explode(',',$data->category_sku))){echo 'selected';} ?> value="{{$val->sku}}">{{$val->name}}</option>
                        @endforeach
                    </select> -->
                    <!-- @foreach($category as $val) -->
                    <!-- <div class="category">
                        <label> <input <?php // if(isset($data) && $data->category_id == $val->id){echo "checked";} ?> type="radio" name="category_id" value="{{$val->id}}"> {{$val->name}} </label>  -->
                        <!-- <label> <input <?php // if(isset($data) && in_array($val->sku, explode(',',$data->category_sku))){echo "checked";} ?> type="checkbox" name="category_sku[]"  value="{{$val->sku}}"> Add </label>  -->
                    <!-- </div>
                    @endforeach
                    <style type="text/css">
                        .category{display: flex; justify-content: space-between; align-items: baseline;    border-bottom: 1px solid #ddd; padding: 5px 0px;}
                    </style>
                </div> -->

                <!-- <div class="form-group">
                    <label>Màu sắc</label>
                    <select name='mausac[]' class="form-control select2" multiple="">
                        @foreach($mausac as $val)
                        <option <?php //if(isset($data) && in_array($val->id, explode(',',$data->product->mausac_id))){echo 'selected';} ?> value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                    </select>
                </div> -->
                
                <div class="form-group">
                    <label>Number</label>
                    <input value="{{ isset($data->product->number) ? $data->product->number : '' }}" type="number" name="number" class="form-control" placeholder="...">
                </div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <input value="{{ isset($data->product->price) ? $data->product->price : '' }}" type="number" name="price" class="form-control" placeholder="...">
                </div>
                <!-- <div class="form-group">
                    <label>OldPrice</label>
                    <input value="{{ isset($data->product->oldprice) ? $data->product->oldprice : '' }}" type="text" name="oldprice" class="form-control" placeholder="...">
                </div>
                <div class="form-group">
                    <label>SaleOff</label>
                    <input value="{{ isset($data->product->saleoff) ? $data->product->saleoff : '' }}" type="text" name="saleoff" class="form-control" placeholder="...">
                </div> -->
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ảnh đại diện</h6>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/product/300/'.$data->img : 'data/no_image.jpg' }}" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Chọn nhiều ảnh</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="file" name="imgdetail[]" multiple class="form-control">
                    <p>Nhấn giữ <i style="color: red">Ctrl</i> để chọn nhiều ảnh !</p>
                </div>
            </div>
            @if(isset($data))
            <div class="card-body">
                <div class="row detail-img">
                    @foreach($data->images as $val)
                    <div class="col-md-6" id="detail_img">
                        <img src="data/product/80/{{$val->img}}">
                        <button type="button" id="del_img_detail"> Xóa ảnh </button>
                        <input type="hidden" name="id_img_detail" id="id_img_detail" value="{{$val->id}}" />
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</form>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


@endsection

@section('function')
<?php 
    function addeditcat ($data, $parent=0, $str='',$select=0)
    {
        foreach ($data as $value) {
            if ($value['parent'] == $parent) {
                if($select != 0 && $value['id'] == $select )
                { ?>
                    <option value="<?php echo $value['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
                <?php } else { ?>
                    <option value="<?php echo $value['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
                <?php }
                
                addeditcat ($data, $value['id'], $str.'__',$select);
            }
        }
    }
?>
@endsection




