<!DOCTYPE html>
<html>
  <head> 
   @include('admin.admincss')
    
   <style>
    .post_title{
     font-size:30px;
     font-weight: bold;
     text-align: center;
      padding: 30px;
      color: white;
    }
    .text-center{
     padding: 30px;
     margin: auto;
    }
   </style>
  </head>
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

  
        <div class="col-lg-8 text-center">
                <div class="block">
                  <div class="title"><strong class="d-block">Add Post</strong><span class="d-block">Post your info and let people be informed</span></div>
                  <div class="block-body">
                 <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
         @csrf
                      <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Description</label>
                        <input type="text" placeholder="Description" class="form-control" name="description">
                      </div>
                       <div class="form-group">       
                        <label class="form-control-label">Image</label>
                        <input type="file" placeholder="Description" class="form-control" name="image">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Submit" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
           
   
       @include('admin.footer')
  </body>
</html>