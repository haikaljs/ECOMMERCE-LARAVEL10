@extends('admin.layouts.master')

@section('content')
  <!-- Main Content -->
 
    <section class="section">
      <div class="section-header">
        <h1>Vendor</h1>
   
      </div>

      <div class="section-body">
       
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Vendor Profile</h4>
               
              </div>
              <div class="card-body">
              <form action="{{route('admin.vendor-profile.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Preview</label>
                    <br>
                    <img width="200" src="{{asset($profile->banner)}}" alt="">
                </div>
                <div class="form-group">
                    <label>Banner</label>
                    <input type="file" name="banner" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone"  value="{{$profile->phone}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$profile->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$profile->address}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="summernote-simple" name="description">{{$profile->description}}</textarea>
                </div>
              
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="tw_link" value="{{$profile->tw_link}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Favebook</label>
                    <input type="text" name="fb_link" value="{{$profile->fb_link}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="insta_link" value="{{$profile->insta_link}}" class="form-control">
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