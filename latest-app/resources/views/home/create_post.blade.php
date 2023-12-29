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
    </style>
    @include('home.homecss')
</head>
<body>
<!-- header section start -->
<div class="header_section">
    @include('home.header')
       

<div class="text-center">
    <h1 class="text-white" style="font-size:30px; font-weight:bold; padding:30px ">Add a Post</h1>
    <form action="{{url('createpost')}}" enctype="multipart/form-data">
        @csrf
        <div class="field_deg">
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Description</label>
            <textarea  name="description"></textarea>
        </div>

        <div>
            <label for="">Add Image</label>
            <input type="file" name="image">
        </div>
        <div class="field_deg">
           
            <input type="submit" value="Add Post" class="btn btn-outline-secondary" style="margin: auto" >
        </div>
    </form>
</div>
<!-- choose section end -->
<!-- footer section start -->
@include('home.footer')
</body>
</html>
