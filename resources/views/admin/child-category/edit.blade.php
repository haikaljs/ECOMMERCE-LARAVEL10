@extends('admin.layouts.master')

@section('content')
  <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
        <h1>Sub Category</h1>
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
                <h4>Edit Sub Category</h4>
              
              </div>
              <div class="card-body">
                <form action="{{route('admin.subcategory.update', $subCategory->id)}}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="form-group">
                    <label>Category</label>
                    @foreach ($categories as $category)
                      
                    @endforeach
                    <select class="form-control" name="category">
                      <option {{$category->id == $subCategory->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <div>
                          <button name="icon" data-icon="{{$subCategory->icon}}" class="btn btn-primary" data-selected-class="btn-danger"
                          data-unselected-class="btn-info" role="iconpicker"></button>
                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"  value="{{$subCategory->name}}"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option {{$subCategory->status == 1 ? 'selected' : ''}} value="1">Active</option>
                          <option {{$subCategory->status == 0 ? 'selected' : ''}}  value="0">Inactive</option>
                      
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
     
            </div>
          </div>
         
        </div>
       
      </div>
    </section>
 
@endsection
