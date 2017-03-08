@extends('layouts.app')
@section('title','404 | '.ucfirst(trans('error.not_found'))) 

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well"> 
			<h1 class="text-center">404</h1>
			<h3 class="text-center">{{ ucfirst(trans('error.not_found')) }} !</h3>
        </div>    
    </div>
</div>
@endsection