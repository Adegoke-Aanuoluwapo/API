<!DOCTYPE html>
<html>

  
   
  

   @include('admin.admincss')
    
  
  <body>


  @include('admin.header')

  
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">

       @if(session()->has('message'))
       <div class="alert alert-success" role="alert">

        <button type="button" class="close" data-dismiss ="alert" aerial-hidden="true"></button>
        {{ session()->get('message') }}
       </div>
       @endif
   
        <div class="col-lg-8 ">
                <div class="block">
                  <div class="title"><strong class="d-block">Add Post</strong><span class="d-block">Post your info and let people be informed</span></div>
                  <div class="block-body" style="">
                 <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
         @csrf
                      <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" placeholder="Title" class=" form-control " name="title" style="background: transparent">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Description</label>
                        
                        <textarea type="text" placeholder="Description" class="form-control" name="description" style="background: transparent"></textarea>
                      </div>
                       <div class="form-group">       
                        <label class="form-control-label">Image</label>
                        <input type="file" placeholder="Description" class="form-control" name="image" style="background: transparent">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Submit" class="btn btn-primary" style="background:#f18c99;">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
       
           
   
       @include('admin.footer')
  