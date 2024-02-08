@extends('admin.layouts.app')
@section('title', 'Agents')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Agents</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="{{ route('admin.agents.create') }}"><i
                    class="fa fa-plus"></i> <strong>CREATE NEW</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
{{--                    <div class="ibox-title">--}}
{{--                        <h5>All Agent</h5>--}}
{{--                    </div>--}}

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.agents.index')}}" method="get"
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
                                                    <a href="{{ route('admin.agents.index') }}"
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
                                    <th class="text-left">ID</th>
                                    <th width="20%" class="text-left">Agent</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th width="20%" >Address</th>
                                    <th>Modified By</th>
                                    <th width="12%" class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach(@$agents as $agent)
                                    <tr>
                                        <th>{{ @$agent->id }}</th>
                                        <td class="text-left">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    <img width="48px" src="<?php echo e(isset($agent->image) ? $agent->image->url : asset('backend/img/profile/man.svg')); ?>">
                                                </div>
                                                <div class="col-8">
                                                    {{ ucfirst(@$agent->name) }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ @$agent->email }}</td>
                                        <td>{{ @$agent->phone }}</td>
                                        <td >{{ @$agent->address }} <br> <b>{{ @$agent->district->name }}</b></td>
                                        <td>{{ @$agent->modifier->name }}</td>

                                        <td>
                                            <a href="{{ route('admin.agents.show', @$agent->id)  }}" title="View"
                                               class="btn btn-success btn-sm cus_btn">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ route('admin.agents.edit', @$agent->id)  }}" title="Edit"
                                               class="btn btn-info btn-sm cus_btn">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>

                                            <button onclick="deleteRow({{ @$agent->id }})" href="JavaScript:void(0)"
                                                    title="Delete" class="btn btn-danger btn-sm cus_btn">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <form id="row-delete-form{{ @$agent->id }}" method="post" class="d-none"
                                                  action="{{ route('admin.agents.destroy', @$agent->id) }}">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            @if (count(@$agents))
                                {{ @$agents->appends(['keyword' => request('keyword'), 'perPage' => request('perPage')])->links() }}
                            @else
                                <div class="text-center">No agent found</div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
