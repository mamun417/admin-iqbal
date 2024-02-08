@extends('admin.layouts.app')
@section('title', 'Clients')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Clients</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="{{ route('admin.clients.create') }}"><i
                    class="fa fa-plus"></i> <strong>CREATE NEW</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
{{--                    <div class="ibox-title">--}}
{{--                        <h5>All Clients</h5>--}}
{{--                    </div>--}}

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.clients.index')}}" method="get"
                                      role="form">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="perPage" class="control-label">Records Per Page</label>
                                                </div>
                                                <div class="col-md-4 pr-0 responsive_p_r_15">
                                                    <select name="perPage" id="perPage" onchange="submit()"
                                                            class="input-sm form-control custom_field_height">
                                                        <option
                                                            value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>
                                                            10
                                                        </option>
                                                        <option
                                                            value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>
                                                            25
                                                        </option>
                                                        <option
                                                            value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>
                                                            50
                                                        </option>
                                                        <option
                                                            value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>
                                                            100
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 pl-sm-1 pr-sm-1 responsive_p_t_f_5">
                                                    <div class="float-left input-group">
                                                        <input name="keyword" type="text"
                                                               value="{{ request('keyword') }}"
                                                               class="input-sm form-control" placeholder="Search Here">
                                                        <span class="input-group-btn">
                                                        <button type="submit"
                                                                class="btn btn-sm btn-primary custom_field_height"> Go!</button>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 p-0 responsive_p_l_15">
                                                <span>
                                                    <a href="{{ route('admin.clients.index') }}"
                                                       class="btn btn-default btn-sm custom_field_height">Reset
                                                    </a>
                                                </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="table-responsive m-t-md">
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

                                @foreach(@$clients as $client)
                                    <tr>
                                        <th>{{ @$client->id }}</th>
                                        <td class="text-left">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <img width="60px" src="<?php echo e(isset($client->image) ? $client->image->url : asset('backend/img/profile/man.svg')); ?>">
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

                            @if (count(@$clients))
                                {{ @$clients->appends(['keyword' => request('keyword'), 'perPage' => request('perPage')])->links() }}
                            @else
                                <div class="text-center">No client found</div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
