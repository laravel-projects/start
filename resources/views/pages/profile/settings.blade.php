@extends('layouts.app')
@section('title',$user->fullname().' - '.ucfirst(trans('lib.settings')))
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-3"> 
            <div class="list-group">
              <a href="#" class="list-group-item active">
                {{ucfirst(trans('lib.account'))}}
              </a>
              <a href="#" class="list-group-item">
                {{ucfirst(trans('lib.security'))}}
              </a> 
            </div> 
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
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.security'))}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} 

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ucfirst(trans('lib.email'))}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ (old('email'))? old('email') : $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ucfirst(trans('lib.password'))}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">{{ucfirst(trans('lib.confpassword'))}}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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