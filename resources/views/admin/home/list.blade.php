@extends('admin.layout.index')

@section('home') class="active" @endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a href="admin/home/add"><button type="button" class="btn btn-primary btn-sm"><i class='fa fa-plus'></i> ADD</button></a>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Category
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @if(count($home) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th class="text-center">Note</th>
                            <th class="text-center">Heading</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($home as $val)
                        <tr>
                            <td>{{$val->note}}</td>
                            <td>{{$val->heading1}}</td>
                            <td  class="text-center">
                                <a href="admin/home/edit/{{$val->id}}">
                                    <i class="fa fa-pencil"></i> sửa
                                </a> |
                                <a onClick="javascript:return window.confirm('Bạn muốn xóa bản ghi này?');" href="admin/home/delete/{{$val->id}}">
                                    <i class="fa fa-trash-o"></i> xóa
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
