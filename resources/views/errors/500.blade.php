@extends('layouts.app')
@section('title','500 | '.ucfirst(trans('error.host'))) 

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well"> 
			<h1 class="text-center">500</h1>
			<h3 class="text-center">{{ ucfirst(trans('error.host')) }} !</h3>
        </div>    
    </div>
</div>
@endsection