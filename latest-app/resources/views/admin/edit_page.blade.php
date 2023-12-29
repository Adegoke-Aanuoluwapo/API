<!DOCTYPE html>
<html>
  <head> 
    
    <base href="/public">
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

        <h1 class="post_title"> Update Post</h1>
        <form action="{{url('update_page', $post->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="text-center">
          <label for="fname" >Post Title :</label><br>
          <input type="text" class="" id="fname" name="title" required value="{{$post->title}}"><br>
         </div>
         <div class="text-center">
          <label for="fname" >Post Description :</label><br>
          <textarea type="text" id="fname" class="form-cntrol" name="description" >{{$post->description}}</textarea><br>
         </div>
         <div class="text-center">
          <label for="fname" > Old Image :</label><br>
          <img style="margin-left: 400px" height="100px" width="100px" src="/postimage/{{$post->image}}" alt=""><br>
         </div>
         <div class="text-center">
          <label for="fname" >Update Old Image :</label><br>
          <input type="file" id="fname" name="image" ><br>
         </div>

         

         <div class="text-center">
         
          <input type="submit" class="btn btn-sucess" id="fname"  ><br>
         </div>

        </form>
      </div>
   
       @include('admin.footer')
  </body>
</html>