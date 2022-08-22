@extends('layout.main')

@section('content')

<div class="row">
<div class="col"></div>
<div class="col col-7">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Text Feedback</h4>
            <form action="" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Company Name</label>
                <input type="text" class="form-control" name="company_name" placeholder="Name">
              </div>

              <div class="form-group">
                <label for="exampleSelectGender">Service Name</label>
                <select class="form-control" name="service_name">
                  <option>service 1 </option>
                  <option>service 2</option>
                </select>
              </div>
              <div class="form-group">
                <label>File upload</label>
                {{-- <input type="file"  class="file-upload-default"> --}}
                <div class="input-group col-xs-12">
                  <input type="file" name="feed_text" class="form-control file-upload-info"  placeholder="Text File">
                  <span class="input-group-append">

                  </span>
                </div>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
    <div class="col"></div>
</div>



    
@endsection
