@extends('admin.layouts.master')

@section('content')
  <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
        <h1>Product</h1>
   
      </div>

      <div class="section-body">
       
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Product</h4>
               
              </div>
              <div class="card-body">
              <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name"  value="{{old('name')}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name"  value="{{old('name')}}"  class="form-control">
                </div>
         
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control main-category" name="category">
                                  <option value="">Select</option>
                                  @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                
                                </select>
                            </div>
                         
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select class="form-control sub-category" name="sub_category">
                                  <option value="">Select</option>
                                 
                              
                                </select>
                             </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Child Category</label>
                                <select class="form-control child-category" name="child_category">
                                  <option value="">Select</option>
                              
                                </select>
                             </div>
                        </div>
                    </div>
                   
                 
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                  
                    </select>
                 </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
              </div>
     
            </div>
          </div>
         
        </div>
       
      </div>
    </section>
 
@endsection
@push('scripts')
  <script>
    $(document).ready(function(){
      // get subcategories
      $('body').on('change', '.main-category', function(e){
       let id = $(this).val()
       $.ajax({
        method: 'GET',
        url: '{{route('admin.product.get-subcategories')}}',
        data: {
          id: id
        },
        success: function(data){
          $('.sub-category').html(' <option value="">Select</option>')
          $.each(data, function(i, item){
            $('.sub-category').append(`<option value="${item.id}">${item.name}</option>`)
          })
        },
        error: function(xhr, status, error){
          console.log(error);
        }
       })
      })

      // get child categories
      $('body').on('change', '.sub-category', function(e){
       let id = $(this).val()
       $.ajax({
        method: 'GET',
        url: '{{route('admin.product.get-child-categories')}}',
        data: {
          id: id
        },
        success: function(data){
          $('.child-category').html(' <option value="">Select</option>')
          $.each(data, function(i, item){
            $('.child-category').append(`<option value="${item.id}">${item.name}</option>`)
          })
        },
        error: function(xhr, status, error){
          console.log(error);
        }
       })
      })
    })
  </script>
@endpush()