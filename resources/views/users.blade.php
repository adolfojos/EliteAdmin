@extends('layouts.app')

@section('title', __('All users'))

@section('style')
    <link href="{{asset('plugins/datatables/buttons.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@include('component.breadcrumb', ['title' => __('All users'), 'list' => ['item'=>'Dashboard', __('All users')]])
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"><i class="fa fa-bars"></i> {{__('All users')}}</h3>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>{{__('Id')}}</th>
                                <th>{{__('Nationality')}}</th>
                                <th>{{__('Dni')}}</th>
                                <th>{{__('Full name')}}</th>

                                <th>{{__('Email')}}</th>
                                <th>{{__('Age')}}</th>
                                <th>{{__('Birthdate')}}</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>{{__('Id')}}</th>
                            <th>{{__('Nationality')}}</th>
                            <th>{{__('Dni')}}</th>
                            <th>{{__('Full name')}}</th>

                            <th>{{__('Email')}}</th>
                            <th>{{__('Age')}}</th>
                            <th>{{__('Birthdate')}}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><a class="btn btn-info btn-xs" href="#" target="_blank">
                                            <i class="fa fa-pencil"></i> {{$user->id}}
                                        </a></td>
                                    <td>{{$user->nationality}}</td>
                                    <td>{{$user->dni}}</td>
                                    <td class="center">{{$user->first_name}} {{$user->last_name}}</td>

                                    <td class="center">{{$user->email}}</td>
                                    <td class="center">{{$user->first_name}}</td>
                                    <td class="center"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
@endsection
@section('script')
    @include('partials.data-tables')
@endsection