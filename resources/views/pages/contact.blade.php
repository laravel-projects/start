@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Contact form</div>

                <div class="panel-body">
                    <form class="form-horizontal">

                        <div class="form-group">
                          <label for="inputName" class="col-lg-3 control-label">Name</label>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputName" placeholder="Your Name">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                          <div class="col-lg-8">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div> 
 
                        <div class="form-group">
                          <label for="textArea" class="col-lg-3 control-label">Contant</label>
                          <div class="col-lg-8">
                            <textarea class="form-control" rows="3" id="textArea"></textarea> 
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-4 col-lg-offset-8">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
