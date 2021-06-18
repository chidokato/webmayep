@extends('admin.layout.index')

@section('home') class="active" @endsection

@section('content')
<?php use App\images; ?>
<form action="admin/home/edit/{{$home->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<!-- /.row -->

<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                add home
            </div>
            <div class="panel-body">
                <div class="row">
					<div class="col-md-12">
	                    <label><b>Heading</b></label>
                        <input value="{{$home->heading1}}" name='heading1' type="text" placeholder="heading1 ..." class="form-control" />
	                </div>
                    <div class="col-md-12">
                        <label>Sub heading</label>
                        <input value="{{$home->heading2}}" name='heading2' type="text" placeholder="heading2 ..." class="form-control" />
                    </div>
              	</div>
			</div>
		</div>

		<div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"> <a href="#Section1" data-toggle="tab">Content 1</a> </li>
                    <li> <a href="#Section2" data-toggle="tab">Content 2</a> </li>
                    <li> <a href="#Section3" data-toggle="tab">Content 3</a> </li>
                    <li> <a href="#Section4" data-toggle="tab">Content 4</a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="Section1">
                        <textarea name="content1" class="form-control" id="ckeditor">{!!$home->content1!!}</textarea>
                    </div>
                    <div class="tab-pane fade in" id="Section2">
                        <textarea name="content2" class="form-control" id="ckeditor1">{!!$home->content2!!}</textarea>
                    </div>
                    <div class="tab-pane fade in" id="Section3">
                        <textarea name="content3" class="form-control" id="ckeditor2">{!!$home->content3!!}</textarea>
                    </div>
                    <div class="tab-pane fade in" id="Section4">
                        <textarea name="content4" class="form-control" id="ckeditor3">{!!$home->content4!!}</textarea>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
	                <div class="col-md-12">
                        <input value="{{$home->note}}" name='note' type="text" placeholder="note ..." class="form-control" />
                        <br>
						<div class="file-upload">
							<button class="btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
							<div class="image-upload-wrap">
								<input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
							</div>
							<div class="file-upload-content" style="display: block;">
								<img class="file-upload-image" src="data/home/{{$home->img}}" />
							</div>
						</div>
		        	</div>
              	</div>
			</div>
		</div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <div class="form-group add-img">
                                <a href="javascript:void(0)" class="add_button">
                                    <img src="admin_asset/dist/img/add-icon.png" />
                                </a>
                                <input type="file" name="images[]" /> 
                            </div>
                        </div>
                    </div>
                    <?php $images = images::where('h_id',$home->id)->orderBy('id','desc')->get(); ?>
                    <div id="imgdetail">
                        @foreach($images as $key => $image)
                        <div class="col-md-6 home-img">
                            <input type="hidden" name="id" value="{{$image->id}}" />
                            <img style="width: 100%; height: 65px" src="data/home/{{$image->img}}">
                            <input type="button" id="del" value="xóa" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end add img -->
	</div>
</div>
</form>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a href="admin/section/list/{{$home->id}}"><span class="btn btn-primary btn-sm"><i class='fa fa-save'></i> ADD SECTION</span></a>
        </h1>
    </div>
</div>

<div class="row" style="padding-bottom: 100px">
    @foreach($home->section as $val)
    <div class="col-md-3">
        <p><img style="width: 100%" src="data/home/{{$val->img}}"></p>
        <p><strong>{{$val->name}}</strong></p>
        <p><a href="admin/section/edit/{{$home->id}}/{{$val->id}}">SỬA</a> | <a href="admin/section/delete/{{$home->id}}/{{$val->id}}">XÓA</a></p>
    </div>
    @endforeach
</div>


<style type="text/css">
    #cke_1_contents {
        height: 200px !important;
    }
    .add-img input{
        width: 90%;
        display: initial;
    }
    .home-img{position: relative;}
    .home-img img{width: 100%; object-fit: cover;border: 1px solid #ddd;margin-top: 10px;}
    .home-img input{
        position: absolute;
        top: 10px;
        right: 15px;
        border: none;
        background-color: red;
        color: #fff;
    }
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        var fieldHTML = '<div class="form-group add-img"> <a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="admin_asset/dist/img/remove-icon.png"></a> <input type="file" name="images[]" /> </div>';
        var x = 1;
        $('.add_button').click(function(){
            $('.form-wrapper').append(fieldHTML);
        });

        $(document).on('click', '.remove_button', function(e){ 
            e.preventDefault();
            $(this).parent('.form-group').remove();
            x--;
        });

        $(document).on('click', '#del', function(e){ 
            e.preventDefault();
            $(this).parent('.home-img').remove();
            x--;
        });


    });
</script>

@endsection
