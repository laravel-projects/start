@extends('layouts.app')
@section('title','401 | '.ucfirst(trans('error.auth'))) 

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well"> 
			<h1 class="text-center">401</h1>
			<h3 class="text-center">{{ ucfirst(trans('error.auth')) }} !</h3>
        </div>    
    </div>
</div>
@endsection