<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.homecss')
</head>
<body>
<!-- header section start -->
<div class="header_section">
    @include('home.header')

</div>
<div class="col-md-12 text-center">
    <div class="text-center"><img src="/postimage/{{$post->image}}"  style="padding: 20px; height: 550px; margin: auto;width: 450px" ></div>
    <h3><b>{{$post->title}}</b></h3>
    <p>Post by <b>{{$post->name}}</b></p>
    <p>Post by <b>{{$post->description}}</b></p>

</div>
<!-- header section end -->
<!-- services section start -->


<!-- choose section end -->
<!-- footer section start -->
@include('home.footer')
</body>
</html>
