@extends('layout.main')

@section('content')
<div class="row" style="height: 100vh">
    <div class="col"></div>
    <div class="col col-7">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Service Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1"> file </label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                 
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  
                </form>
              </div>
            </div>
          </div>
    </div>
        <div class="col"></div>
    </div>
@endsection