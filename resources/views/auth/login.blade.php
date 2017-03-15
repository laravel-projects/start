@extends('layouts.app')
@section('title',ucfirst(trans('lib.login')))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.login'))}}</div>
                <div class="panel-body"><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ucfirst(trans('lib.email'))}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ucfirst(trans('lib.email'))}}">

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
                                <input id="password" type="password" class="form-control" name="password" required placeholder="{{ucfirst(trans('lib.password'))}}">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group"><hr>
                            <div class="col-xs-4 col-xs-offset-1">   
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ucfirst(trans('lib.remember-me'))}}
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ucfirst(trans('lib.forget-pass'))}}?
                                </a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-3 col-xs-offset-1 col-xs-10">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ucfirst(trans('lib.login'))}}
                                </button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
