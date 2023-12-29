<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')
     <style>
     .post_deg{
      padding: 30px;
      text-align: center;
      background-color: black
      }
      .title_deg{
       font-size: 30px;
       font-weight: bold;
       padding: 15px;
       color: white;
      }
        .des_deg{
       font-size: 18px;
       font-weight: bold;
       padding: 15px;
       color: white;
      }
      .img_deg{
        height:200px;
        width:3oopx;
        margin: auto;
        padding: 30px; 
      }
     </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
        @foreach ($data as $data)
            
        
        <div class="post_deg">
         <img class="img_deg" src="/postimage/{{$data->image}}" alt="">
         <h4 class="title_deg">{{$data->title}}</h4>
         <p class="des_deg">{{$data->description}}</p>
         <a onclick="return confirm('are you sure to delete this ?')" href="{{url('del_post', $data->id)}}" class="btn btn-danger">Delete</a>

         <a href="{{url('edit_post', $data->id)}}" class="btn btn-primary">Update</a>
        </div>
      </div>
      @endforeach
      <!-- footer section start -->
    @include('home.footer')
   </body>
</html>
