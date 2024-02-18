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
                  <label>Brand</label>
                  <select class="form-control" name="brand">
                    <option value="">Select</option>
                    @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                  
                  </select>
               </div>

               <div class="form-group">
                <label>SKU</label>
                <input type="text" name="sku"  value="{{old('sku')}}"  class="form-control">
              </div>

               <div class="form-group">
                <label>Price</label>
                <input type="text" name="price"  value="{{old('price')}}"  class="form-control">
              </div>

              <div class="form-group">
                <label>Offer Price</label>
                <input type="text" name="offer_price"  value="{{old('offer_price')}}"  class="form-control">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Offer Start Price</label>
                    <input type="offer_start_price" class="form-control datepicker">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Offer End Date</label>
                    <input type="text" name="offer_end_date"  value="{{old('offer_end_date')}}"  class="form-control datepicker">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Stock Quantity</label>
                <input type="number" min="0" name="qty"  value="{{old('qty')}}"  class="form-control">
              </div>
              
              <div class="form-group">
                <label>Video Link</label>
                <input type="text" name="video_link"  value="{{old('video_link')}}"  class="form-control">
              </div>

              <div class="form-group">
                <label>Short Description</label>
                <textarea type="text" name="short_description"   class="form-control">
                {{old('short_description')}}
                </textarea>
              </div>

              <div class="form-group">
                <label>Long Description</label>
                <textarea name="long_description" class="form-control summernote">
                {{old('long_description')}}
                </textarea>
              </div>

           <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Is Top</label>
                <select class="form-control" name="is_top">
                  <option value="">Select</option>
                  <option value="1"  {{ old('is_top') == '1' ? 'selected' : '' }}>Yes</option>
                  <option value="0"  {{ old('is_top') == '0' ? 'selected' : '' }}>No</option>
                </select>
              </div>

             

              
            </div>
            <div class="col-md-4"> <div class="form-group">
              <label>Is Best</label>
              <select class="form-control" name="is_best">
                <option value="">Select</option>
                <option value="1" {{ old('is_best') == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('is_best') == '0' ? 'selected' : '' }}>No</option>
              </select>
            </div></div>
            <div class="col-md-4"><div class="form-group">
              <label>Is Featured</label>
              <select class="form-control" name="is_featured">
                <option value="">Select</option>
                <option value="1" {{ old('is_featured') == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('is_featured') == '0' ? 'selected' : '' }}>No</option>
              </select>
            </div></div>
           </div>

           <div class="form-group">
            <label>SEO Title</label>
            <input type="text" name="seo_title"  value="{{old('seo_title')}}"  class="form-control">
          </div>

           <div class="form-group">
            <label>SEO Description</label>
            <textarea name="seo_description" class="form-control">
            </textarea>
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