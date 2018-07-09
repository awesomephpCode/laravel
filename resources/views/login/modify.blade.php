@extends('common.common')
{{--@include('welcome')--}}



@section('content')
    <div class="content-wrapper">
        <!-- 内容标题 -->
        <section class="content-header">
            <h1>
                修改信息
            </h1>
        </section>
        <!-- 主体内容开始 -->
        <section class="content container-fluid">
            <form class="form-horizontal" action="{{route('admin/modify')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label">账号</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="username" value="">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label">密码</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="password" value="">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label">头像</label>
                    <div class="col-sm-4">
                        <img src="{{$avatar}}" id="img-preview1">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-4">
                        <input type="button" name="upFile" id="fileupload1" class="btn btn-success" value="上传头像">
                    </div>
                </div>
                <input type="hidden" name="avatar" id="avatar" value="{{$avatar}}">
                <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success" value="修改">
                    </div>
                </div>
            </form>
        </section>
        <!-- 内容结束 -->
    </div>
    @endsection
@section('js')
    <script>
        $(document).ready(function() {

            {{--$.ajax({--}}
                {{--type:'POST',--}}
                {{--url:"{{url('test')}}",--}}
                {{--data:{id:1},--}}
                {{--dataType:"json",--}}
                {{--success:function ($data) {--}}
                    {{--console.log('成功');--}}
                    {{--console.log($data);--}}
                {{--},--}}
                {{--error:function ($data) {--}}
                    {{--console.log('失败');--}}
                {{--}--}}
            {{--});--}}

            new ss.SimpleUpload({
                button: '#fileupload1',
                url: "{{url('admin/upload_avatar')}}",
                name: 'upFile',
                responseType: 'json',
                allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
                maxSize: 20480000,
                onComplete: function (filename, response) {
                    if (response.code == 0) {
                        $('#avatar').val(response.data.file);
                        $('#img-preview1').attr('src', response.data.file);
                    }
                }
            });
        });

    </script>
    @endsection
