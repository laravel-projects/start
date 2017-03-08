@extends('layouts.app')
@section('title','403 | '.ucfirst(trans('error.permission'))) 

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well"> 
			<h1 class="text-center">403</h1>
			<h3 class="text-center">{{ ucfirst(trans('error.permission')) }} !</h3>
        </div>    
    </div>
</div>
@endsection