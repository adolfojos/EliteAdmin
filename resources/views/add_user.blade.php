@extends('layouts.app')

@section('title', __('Add user'))

@section('content')
    @include('component.breadcrumb', ['title' => 'Dashboard', 'list' => ['item'=>'Dashboard', __('Add user')]])
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">{{__('Central content')}}</h3>
            </div>
        </div>
    </div>
@endsection
