@extends('layouts.app')
@section('content')
    @include('component.breadcrumb', ['title' => 'Dashboard', 'list' => ['item'=>'Dashboard']])
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">{{'Contenido central'}}</h3>
            </div>
        </div>
    </div>
@endsection
