@extends('layouts.app')
@section('title',$user->fullname().' - '.ucfirst(trans('lib.settings')))
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-3"> 
            @include('pages.profile.settings._menu')
        </div> 
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.account'))}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ ($errors->has('firstname')OR$errors->has('lastname')) ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">{{ucfirst(trans('lib.first&lastname'))}}</label>

                            <div class="col-md-3">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ (old('firstname'))? old('firstname') : $user->firstname }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ (old('lastname'))? old('lastname') : $user->lastname }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">{{ucfirst(trans('lib.username'))}}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ (old('username'))? old('username') : $user->username }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-7">
                                <button type="submit" class="btn btn-primary btn-block">{{ucfirst(trans('lib.update'))}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>  
    </div>
</div>
@endsection