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
                <h4>Update Product</h4>
               
              </div>
              <div class="card-body">
              <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Preview</label>
                    <br>
                    <img src="{{asset($product->thumb_image)}}" width="200" alt="">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name"  value="{{$product->name}}"  class="form-control">
                </div>
             
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control main-category" name="category">
                                  <option value="">Select</option>
                                  @foreach ($categories as $category)
                                  <option value="{{$category->id}}" {{$category->id == $product->category_id? 'selected' : ''}}>{{$category->name}}</option>
                                  @endforeach
                                
                                </select>
                            </div>
                         
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select class="form-control sub-category" name="sub_category">
                                  <option value="">Select</option>
                                 @foreach ($subCategories as $subCategory)
                                  <option {{$subCategory->id == $product->sub_category_id ? 'selected' : ''}} value="">{{$subCategory->name}}</option>
                                 @endforeach
                              
                                </select>
                             </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Child Category</label>
                                <select class="form-control child-category" name="child_category">
                                  <option value="">Select</option>
                                  @foreach ($childCategories as $childCategory)
                                  <option {{$childCategory->id == $product->child_category_id ? 'selected' : ''}} value="">{{$childCategory->name}}</option>
                                 @endforeach
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
                    <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                    @endforeach
                  
                  </select>
               </div>

               <div class="form-group">
                <label>SKU</label>
                <input type="text" name="sku"  value="{{$product->sku}}"  class="form-control">
              </div>

               <div class="form-group">
                <label>Price</label>
                <input type="text" name="price"  value="{{$product->price}}"  class="form-control">
              </div>

              <div class="form-group">
                <label>Offer Price</label>
                <input type="text" name="offer_price"  value="{{$product->offer_price}}"  class="form-control">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Offer Start Date</label>
                    <input type="text" name="offer_start_date" class="form-control datepicker" value="{{$product->offer_start_date}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Offer End Date</label>
                    <input type="text" name="offer_end_date"  value="{{$product->offer_end_date}}"  class="form-control datepicker">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Stock Quantity</label>
                <input type="number" min="0" name="qty"  value="{{$product->qty}}"  class="form-control">
              </div>
              
              <div class="form-group">
                <label>Video Link</label>
                <input type="text" name="video_link"  value="{{$product->video_link}}"  class="form-control">
              </div>

              <div class="form-group">
                <label>Short Description</label>
                <textarea type="text" name="short_description"   class="form-control">
                {{!! $product->short_description !!}}
                </textarea>
              </div>

              <div class="form-group">
                <label>Long Description</label>
                <textarea name="long_description" class="form-control summernote">
                {!! $product->long_description !!}
                </textarea>
              </div>

    
         
              <div class="form-group">
                <label>Product Type</label>
                <select class="form-control" name="product_type">
                  <option value="">Select</option>
                  <option value="new_arrival" {{ $product->product_type == 'new_arrival' ? 'selected' : '' }}>New Arrival</option>
                  <option value="featured_product" {{ $product->product_type  == 'featured_product' ? 'selected' : '' }}>Featured</option>
                  <option value="top_product" {{ $product->product_type  == 'top_product' ? 'selected' : '' }}>Top Product</option>
                  <option value="best_product" {{ $product->product_type  == 'best_product' ? 'selected' : '' }}>Best Product</option>
               
                </select>
              </div>

           <div class="form-group">
            <label>SEO Title</label>
            <input type="text" name="seo_title"  value="{{$product->seo_title}}"  class="form-control">
          </div>

           <div class="form-group">
            <label>SEO Description</label>
            <textarea name="seo_description" class="form-control">
              {!! $product->seo_description !!}
            </textarea>
          </div>

              <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                      <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Active</option>
                      <option value="0" {{$product->status == 0 ? 'selected' : ''}}>Inactive</option>
                  
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
@push('scripts')
  <script>
    $(document).ready(function(){
      // get subcategories
      $('body').on('change', '.main-category', function(e){
       $('.child-category').html(' <option value="">Select</option>')
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