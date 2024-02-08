@extends('admin.layouts.app')

@section('title', 'Staff Edit')

@section('content')

<div class="row wrapper border-bottom white-bg py-3">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.staffs.index') }}">Staff</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Update</strong>
            </li>
        </ol>
        <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
           href="{{ route('admin.staffs.index') }}"><i
                class="fa fa-list"></i> <strong>ALL CAREER</strong></a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <form action="{{ route('admin.staffs.update', @$staff->id) }}" method="post" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Update Staff</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            @include('admin.pages.staffs.element')

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <a href="{{ route('admin.staffs.index') }}" class="btn btn-danger" type="submit">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save Change</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
