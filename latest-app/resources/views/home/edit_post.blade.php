<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.homecss')
      <style>
        label{
            display: inline-block;
            width:200px;
            color: white;
            font-size: 18px;
            font-weight: bold
        }
        .field_deg{
            padding: 25px;
        }
    </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')

          <div class="text-center bg-dark">
    <h1 class="text-white" style="font-size:30px; font-weight:bold; padding:30px ">Edit a Post</h1>
    <form action="{{url('updating_post')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="field_deg">
            <label for="">Title</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div class="field_deg">
            <label for="">Description</label>
          <textarea  name="description">{{$post->description}}</textarea>
        </div>

        <div class="field_deg">
            <label for="">Current Image</label>
            <img style="margin:auto" height="150px" width="250px" src="/postimage/{{$post->image}}" alt="">
        </div>

        <div class="field_deg">
            <label for="">Current Image</label>
           <input type="file" name="image">
        </div>
        <div class="field_deg">
           
            <input type="submit" value="Edit Post" class="btn btn-outline-secondary" style="margin: auto" >
        </div>
    </form>
</div>
      </div>

      <!-- header section end -->
      <!-- services section start -->
 
      <!-- choose section end -->
      <!-- footer section start -->
    @include('home.footer')
   </body>
</html>
