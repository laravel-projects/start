@extends('layouts.app')
@section('title',ucfirst(trans('lib.register')))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucfirst(trans('lib.register'))}}</div>
                <div class="panel-body"><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ ($errors->has('firstname')OR$errors->has('lastname')) ? ' has-error' : '' }}">
                            <label for="firstname" class="col-xs-4 control-label">{{ucfirst(trans('lib.first&lastname'))}}</label>

                            <div class="col-xs-3">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="{{ ucfirst(trans('lib.firstname')) }}">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-xs-3">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="{{ ucfirst(trans('lib.lastname')) }}">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-xs-4 control-label">{{ucfirst(trans('lib.email'))}}</label>

                            <div class="col-xs-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="{{ ucfirst(trans('lib.email')) }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-xs-4 control-label">{{ucfirst(trans('lib.birthday'))}}</label>

                            <div class="col-xs-6">
                                <div class="col-xs-3"> 
                                    <select name="birthday[d]" id="birthday" class="form-control">
                                        @for($i=1;$i<= 31;$i++)
                                            <option value="{{$i}}" {{ ($i==date('d'))? "selected": ""}}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-xs-5"> 
                                    <select name="birthday[m]" id="birthday" class="form-control">
                                        @foreach(trans('date.month') as $k=>$item)
                                            <option value="{{$k}}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-4"> 
                                    <select name="birthday[y]" id="birthday" class="form-control">
                                        @for($i=date('Y');$i>= (date('Y') - 100);$i--)
                                            <option value="{{$i}}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-xs-4 control-label">{{ucfirst(trans('lib.gender'))}}</label>

                            <div class="col-xs-6">
                                <label class="col-xs-6">
                                    <input type="radio" name="gender" value="true">
                                    <span>{{ ucfirst(trans('lib.men')) }}</span>
                                </label>
                                <label class="col-xs-6">
                                    <input type="radio" name="gender" value="false">
                                    <span>{{ ucfirst(trans('lib.woman')) }}</span>
                                </label>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-xs-4 control-label">{{ucfirst(trans('lib.country'))}}</label>

                            <div class="col-xs-6">
                                <select name="country" id="country" class="form-control">
                                    @foreach(trans('country.base') as $k=>$item)
                                        <option value="{{$k}}">{{ $item }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-xs-4 control-label">{{ucfirst(trans('lib.password'))}}</label>

                            <div class="col-xs-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="{{ ucfirst(trans('lib.password')) }}">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ ucfirst(trans('lib.confpassword')) }}">
                            </div>
                        </div>

                        <div class="form-group"><hr>
                            <div class="col-md-3 col-md-offset-7 col-xs-10 col-xs-offset-1">
                                <button type="submit" class="btn btn-primary btn-block">{{ucfirst(trans('lib.register'))}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
