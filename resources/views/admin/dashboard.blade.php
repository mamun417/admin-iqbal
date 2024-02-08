@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="widget style1 lazur-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-file-text-o fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right pl-0">
                                        <span> Total Category </span>
{{--                                        <h3 class="font-bold">{{ $totalCategory}}</h3>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget style1 navy-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-archive fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right pl-0">
                                        <span> Total Post </span>
{{--                                        <h3 class="font-bold">{{ $totalPost}}</h3>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget style1 black-bg text-light">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right pl-0">
                                        <span> Total User </span>
{{--                                        <h3 class="font-bold">{{ number_format(@$totalCustomer) }}</h3>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Latest Orders List </h5>
                </div>
                <div class="ibox-content">
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-sm-9 m-b-xs">--}}
                    {{--                            <div data-toggle="buttons" class="btn-group btn-group-toggle">--}}
                    {{--                                <label class="btn btn-sm btn-white active"> <input type="radio" id="option1"--}}
                    {{--                                                                                   name="options"> Day </label>--}}
                    {{--                                <label class="btn btn-sm btn-white"> <input type="radio" id="option2" name="options">--}}
                    {{--                                    Week </label>--}}
                    {{--                                <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options">--}}
                    {{--                                    Month </label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-sm-3">--}}
                    {{--                            <div class="input-group mb-3">--}}
                    {{--                                <input type="text" class="form-control form-control-sm" placeholder="Search">--}}
                    {{--                                <div class="input-group-append">--}}
                    {{--                                    <button class="btn btn-sm btn-primary" type="button">Go!</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection
