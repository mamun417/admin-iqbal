@extends('admin.layouts.app')

@section('title', 'Agent Details')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.agents.index') }}">Agents</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Details</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="{{ route('admin.agents.index') }}"><i
                    class="fa fa-list"></i> <strong>ALL AGENTS</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-12">
                <h2 class="text-center">
                    Agent Details:
                </h2>
            </div>

            <div class="col-md-4">
                <div class="profile-image">
{{--                    <img src="{{ $agent->image->url }}" class=" m-b-md" alt="profile">--}}
                </div>
                <div class="profile-information">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{ $agent->name }}
                            </h2>
                            <p>
                                <b>Email:</b> {{ $agent->email }} <br>
                                <b>Phone:</b> {{ $agent->phone }} <br>
                                <b>Address:</b> {{ $agent->address }}, {{ $agent->district->name }} <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    @foreach($agent->document as $doc)
                        @php
                            $path_parts = pathinfo($doc->url);
                            $file_extension = $path_parts['extension'];
                        @endphp
                        <div class="infont col-md-3 col-sm-4 text-center">
                            <a href="{{ $doc->url }}" style="color: #000;" download>
                                @if($file_extension == 'doc' || $file_extension == 'docx')
                                    <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                @elseif($file_extension == 'xls' || $file_extension == 'xlsx')
                                    <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>
                                @elseif($file_extension == 'pdf')
                                    <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
                                @elseif($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'webp')
                                    <i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
                                @endif
                                <small>Download</small>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 text-right">
                <p class="lead mb-1">Total Client: <b>{{@$agent->clients()->count()}}</b></p>
                <p class="lead mb-1">Due: <b>{{@$agent->due}}</b></p>
                <p class="lead mb-1">Paid: <b>{{@$agent->paid}}</b></p>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title text-center">
                        <h5>Client List</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="5%" class="">ID</th>
                                    <th width="30%" class="text-left">client</th>
                                    <th width="30%" >Address</th>
                                    <th width="10%">Status</th>
                                    <th width="12%" class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach(@$agent->clients as $client)
                                    <tr>
                                        <th>{{ @$client->id }}</th>
                                        <td class="text-left">
                                            <div class="row align-items-center">
                                                <div class="col-3">
{{--                                                    <img width="60px" src="<?php echo e(isset($client->image) ? $client->image->url : asset('backend/img/profile/man.svg')); ?>">--}}
                                                </div>
                                                <div class="col-9">
                                                    <b>{{ ucfirst(@$client->first_name) }} {{ ucfirst(@$client->last_name) }}</b>
                                                    {{ @$client->email }} <br>
                                                    {{ @$client->phone }}
                                                </div>
                                            </div>
                                        </td>

                                        <td >{{ @$client->address }} <br> <b>{{ @$client->district->name }}</b></td>
                                        <td>{{ ucfirst(@$client->status) }}</td>

                                        <td>
                                            <a href="{{ route('admin.clients.show', @$client->id)  }}" title="View"
                                               class="btn btn-success btn-sm cus_btn">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ route('admin.clients.edit', @$client->id)  }}" title="Edit"
                                               class="btn btn-info btn-sm cus_btn">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>

                                            <button onclick="deleteRow({{ @$client->id }})" href="JavaScript:void(0)"
                                                    title="Delete" class="btn btn-danger btn-sm cus_btn">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <form id="row-delete-form{{ @$client->id }}" method="post" class="d-none"
                                                  action="{{ route('admin.clients.destroy', @$client->id) }}">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
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

@endsection

