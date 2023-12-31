<!DOCTYPE html>
<html lang="en">
<head>
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
    .contact_section{
        position: absolute
        ;
    }
    </style>
    @include('home.homecss')
</head>
<body>

    @include('sweetalert::alert')
<!-- header section start -->
<div class="header_section">
    @include('home.header')
 
     <div class="contact_section layout_padding bg-dark">
        <div class="container">
          <h1 class="contact_taital text-white">Add a Post</h1>
           <form action="{{url('createpost')}}" enctype="multipart/form-data" method="POST">
        @csrf
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Title" name="title">
             </div>
              <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="description"></textarea>
             </div>
             <div class="form-group">
                <input type="file" class="" placeholder="description" name="image">
             </div>
             
            
             <div class="send_btn"><input type="submit" value="SEND" class="btn btn-outline-secondary"></div>
          </div>
           </form>
        </div>
      </div>



<!-- choose section end -->
<!-- footer section start -->
@include('home.footer')
</body>
</html>
