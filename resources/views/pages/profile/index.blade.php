@extends('layouts.app')
@section('title',$user->fullname())
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="{{asset($user->img())}}" class="img-thumbnail panel" alt="{{ $user->username }}" title="{{ $user->fullname() }}">
            <h1>{{ $user->fullname() }}</h1><hr>
            <p><i class="ion ion-quote"></i> &nbsp; <b>{{ $user->email }}</b></p>
        </div> 
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.welcome'))}}</div>

                <div class="panel-body">
                    {{ucfirst(trans('lib.u-login'))}}!
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.welcome'))}}</div>

                <div class="panel-body">
                    {{ucfirst(trans('lib.u-login'))}}!
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection