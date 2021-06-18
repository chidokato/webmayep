@extends('admin.layout.index')
@section('themes') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<form action="admin/themes/add" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Themes: add/edit </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <button type="reset" class="btn btn-warning btn-sm  mr-2"><i class="las la-reply"></i> Back</button>
                <button type="reset" class="btn btn-danger btn-sm  mr-2"><i class="las la-sync"></i> Reset</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="las la-save"></i> Save</button>
                <!--end::Actions-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-header">
                            <h3 class="card-title">Logo</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-checkable mt-10" > <!-- id="kt_datatable1" -->
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                <input onclick="toggle(this);" type="checkbox" value="" id="checkbox">
                                                <span></span>
                                                <button class="btn btn-danger btn-sm  ml-2 delall"><i class="la la-trash"></i> Dell all</button>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Vị trí</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Hot</th>
                                        <th>View</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($themes as $val)
                                    <tr>
                                        <td>
                                            <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                <input type="checkbox" value="{{$val->id}}">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td class="sorting_1 dtr-control">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 flex-shrink-0">
                                                    {!! isset($val->img) ? '<img src="data/themes/'.$val->img.'" class="thumbnail-img align-self-center" alt="" />' : '' !!}
                                                </div>
                                                <div class="ml-3">
                                                    <span class="text-dark-75 font-weight-bold line-height-sm d-block">{{$val->name}}</span>
                                                    <!-- <a href="#" class="text-muted text-hover-primary">Beier-Mante</a> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ isset($val->note) ? $val->note : '' }}</td>
                                        <td></td>
                                        <td>
                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{date('d/m/Y',strtotime($val->created_at))}}</span>
                                            <span class="text-muted font-weight-bold">{{date('d/m/Y',strtotime($val->updated_at))}}</span>
                                        </td>
                                        <td>
                                            <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                <input type="checkbox" <?php if($val->status == 'true'){echo "checked";} ?> >
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>22</td>
                                        <td>10/15/2017</td>
                                        <td nowrap="nowrap">
                                            <a href="admin/product/edit/{{$val->id}}" class="btn btn-sm btn-clean btn-icon" title="Edit details"><i class="la la-edit"></i></a>
                                            <a href="admin/product/delete/{{$val->id}}" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a>
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
    </div>
<form>
</div>
@endsection