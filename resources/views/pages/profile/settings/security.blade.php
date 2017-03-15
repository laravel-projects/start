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
                <div class="panel-heading">{{ucfirst(trans('lib.security'))}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} 

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-xs-4 control-label">{{ucfirst(trans('lib.email'))}}</label>

                            <div class="col-xs-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ (old('email'))? old('email') : $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-xs-4 control-label">{{ucfirst(trans('lib.password'))}}</label>

                            <div class="col-xs-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-xs-4 control-label">{{ucfirst(trans('lib.confpassword'))}}</label>

                            <div class="col-xs-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group"><hr>
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