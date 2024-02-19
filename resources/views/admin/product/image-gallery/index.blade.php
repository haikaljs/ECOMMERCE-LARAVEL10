@extends('admin.layouts.master')

@section('content')
  <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
        <h1>Product Image Gallery</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table</div>
        </div>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card" style="overflow-x:auto">
              <div class="card-header">
                <h4>Upload Image</h4>
              
              </div>
              <div class="card-body">
                <form action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Image <code>(Multiple image supported!)</code></label>
                    <input type="file" name="image" class="form-control" id="">
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
     
            </div>
          </div>
         
        </div>
       
        <div class="row">
          <div class="col-12">
            <div class="card" style="overflow-x:auto">
              <div class="card-header">
                <h4>All Images</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Create new</a>
                </div>
              </div>
              <div class="card-body">
                {{$dataTable->table()}}
              </div>
     
            </div>
          </div>
         
        </div>
       
      </div>
    </section>
 
@endsection
@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush