<!DOCTYPE html>
<html>
  <head> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    .table{
     border: 1px solid black;
     width: 80%;
     text-align: center;
     margin-left: 70px;
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

        <button type="button" class="close" data-dismiss ="alert" aerial-hidden="true">x</button>
        {{ session()->get('message') }}
       </div>
       @endif
        <h1 class="title text-center">All Post</h1>

        <table class="table table-bordered">
         <tr>
          <th>Post Title</th>
          <th>Description</th>
          
          <th>Posted by</th>
          <th>status</th>
          <th>usertype</th>
          <th>Image</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Status Accepted</th>
          <th>Status Rejected</th>
         </tr>
           @foreach ($post as $post)
           <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            
            <td>{{$post->name}}</td>
            <td>{{$post->post_status}}</td>
            <td>{{$post->usertype}}</td>
            <td><img src="postimage/{{$post->image}}" width=50 height=50></td>
            <td><a href="{{url('edit_page',$post->id)}}" class="btn btn-success" onclick="confirmation(event)"> Edit</a></td>
            <td><a href="{{url('deletepost',$post->id)}}" class="btn btn-danger" onclick="confirmation(event)"> Delete</a></td>
            <td><a onclick="return confirm('Are you sure to accept this post ?')" href="{{url('accept_post',$post->id)}}" class="btn btn-outline-secondary">Accepted</a></td>
            <td><a onclick="return confirm('Are you sure to reject this post ?')" href="{{url('reject_post', $post->id)}}" class="btn btn-danger">Rejected</a></td>
           </tr>
      
       @endforeach
     

        </table>
    
      </div>
   
       @include('admin.footer')


       <script >
        
        function confirmation(ev)
        {
          alert('Holla');
          ev.preventDefault();
          var urlToRedirect=ev.currentTarget.getAttribute('href');

          console.log(urlToRedirect);

          swal({
            title: "Are you Sure to Delete this " ,
            text : "You won't be able to revert this delete " ,
            icon : "warning",
            buttons: true,
            dangerMode:true,
          })
          
          .then((willCancel)=>
          { 
            if(willCancel)
            {
              window.location.href=urlToRedirect;
            }
          });
          
        }
       </script>
       
       <script >
        
        function confirmation(ev)
        {
      
          ev.preventDefault();
          var urlToRedirect=ev.currentTarget.getAttribute('href');

          console.log(urlToRedirect);

          swal({
            title: "Are you Sure to Edit this " ,
            text : "You changes will overide this " ,
            icon : "warning",
            buttons: true,
            dangerMode:true,
          })
          
          .then((willCancel)=>
          { 
            if(willCancel)
            {
              window.location.href=urlToRedirect;
            }
          });
          
        }
       </script>
  </body>
</html>