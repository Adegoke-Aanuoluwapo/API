<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        ::-webkit-scrollbar{
            width: 5px;
        }
        ::-webkit-scrollbar-track{
            background: #13254C;
        }
        ::-webkit-scrollbar-thumb{
            background: #061128;
        }
    </style>
</head>

<body style="background: #05113b;">
<div>
    <div class="container-fluid m-0 d-flex p-2">
        <div class="pl-2" style="width: 40px; height: 50px; font-size: 180%;">
            <i class="fa fa-angle-double-left text-white mt-2"></i>
        </div>
        <div style="width: 50px; height: 50px">
            <img src="data:image/png;base64,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" width="100%" height="100%" style="border-radius:50px;">
        </div>
        <div class="text-white font-weight-bold ml-2 mt-2">
            Chatbox
        </div>
    </div>
    <div style="background: #061128; height: 2px"></div>
    <div id="content-box" class="container-fluid p-2" style="height: calc(100vh - 130px);overflow-y: scroll">

{{--        <div class="d-flex mb-2">--}}
{{--            <div class="mr-2" style="width: 45px;height: 45px;">--}}
{{--                <img alt="" src="data:image/png;base64,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" width="100%" height="100%" style="border-radius:50px;">--}}
{{--            </div>--}}
{{--            <div class="text-white px-3 py-2" style="width: 270px; background: #13254b;border-radius: 10px;font-size: 85%">--}}
{{--                I am a chatbox--}}
{{--            </div>--}}

{{--        </div>--}}

    </div>
    <div class="container-fluid w-100 px-3 py-2 d-flex" style=" background: #13254b; height:62px;">
        <div class="mr-2 pl-2 " style="background: #ffffff1c; width: calc(100% - 45px); border-radius: 5px;">
            <input id="input" class="text-white" type="text" name="input" style="background: none; width: 100%; border: 0; outline: none;">

        </div>
        <div id="button-submit" class="text-center" style="background: #4acfee; height: 100%; width:50px;border-radius: 5px">
            <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height: 45px;"></i>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#button-submit').on('click', function(){
        $value = $('#input').val();
        $('#content-box').append(`<div class="mb-2">
            <div class="float-right px-3 py-2" style="width: 270px; background: #4acfee;border-radius: 10px;float: right;font-size: 85%;">
            `+$value+`
        </div>
        <div style="clear:both;"></div>
    </div>`);


        $.ajax({
            type:"post",
            url: '{{url('send')}}',
            data: {
                'input': $value
            },
            success:function(data){
                $('#content-box').append(`<div class="d-flex mb-2">
                    <div class="mr-2" style="width: 45px;height: 45px;">
                    <img alt="" src="data:image/png;base64,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" width="100%" height="100%" style="border-radius:50px;">
                    </div>
                <div class="text-white px-3 py-2" style="width: 270px; background: #13254b;border-radius: 10px;font-size: 85%">
                   `+data+`
                </div>

            </div>`)
                $value = $('#input').val();
            }
        })

    });
</script>
</body>

</html>
