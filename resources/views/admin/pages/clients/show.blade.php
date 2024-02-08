@extends('admin.layouts.app')

@section('title', 'Client Details')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.clients.index') }}">clients</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Details</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="{{ route('admin.clients.index') }}"><i
                    class="fa fa-list"></i> <strong>ALL CLIENTS</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-12">
                <h2 class="text-center">
                    Client Details:
                </h2>
            </div>
            <div class="col-md-4">

                <div class="profile-image">
                    {{--                    <img src="{{ $client->image->url }}" class=" m-b-md" alt="profile">--}}
                </div>
                <div class="profile-information">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{ $client->first_name }} {{ $client->last_name }}
                            </h2>
                            <p>
                                <b>Email:</b> {{ $client->email }} <br>
                                <b>Phone:</b> {{ $client->phone }} <br>
                                <b>Address:</b> {{ $client->address }}, {{ $client->district->name }} <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <p class="lead mb-1">Documents</p>
                    </div>
{{--                    @foreach($client->document as $doc)--}}
{{--                        @php--}}
{{--                            $path_parts = pathinfo($doc->url);--}}
{{--                            $file_extension = $path_parts['extension'];--}}
{{--                        @endphp--}}
{{--                        <div class="infont col-md-3 col-sm-4 text-center">--}}
{{--                            <a href="{{ $doc->url }}" style="color: #000;" download>--}}
{{--                                @if($file_extension == 'doc' || $file_extension == 'docx')--}}
{{--                                    <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>--}}
{{--                                @elseif($file_extension == 'xls' || $file_extension == 'xlsx')--}}
{{--                                    <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>--}}
{{--                                @elseif($file_extension == 'pdf')--}}
{{--                                    <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>--}}
{{--                                @elseif($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'webp')--}}
{{--                                    <i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i>--}}
{{--                                @else--}}
{{--                                    <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>--}}
{{--                                @endif--}}
{{--                                <small>Download</small>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
            </div>
            <div class="col-md-4 text-right">
                <p class="lead mb-1">Contract Price: <b>{{@$client->contract_price}}</b></p>
                <p class="lead mb-1">Paid: <b>{{@$client->paid}}</b></p>
                <p class="lead mb-1">Due: <b>{{@$client->due}}</b></p>
                <p class="lead mb-1">Status: <b>{{@$client->status}}</b></p>
            </div>
            <div class="col-md-6">
                <p class="lead">Note:</p>
                <p>{{ $client->note }}</p>
            </div>
            <div class="col-md-6">
                <p class="lead">Description:</p>
                <p>{{ $client->description }}</p>
            </div>


        </div>
    </div>

@endsection

