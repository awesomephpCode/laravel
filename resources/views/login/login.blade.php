<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('custom.title')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ URL::asset('module/AdminLTE/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('module/AdminLTE/css/AdminLTE.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('module/AdminLTE/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('module/AdminLTE/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('module/AdminLTE/css/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <div class="login-logo">
        <a href=""><b>{{config('custom.title')}}</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="padding:40px 20px ">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{url('admin/login?return_url='.$return_url)}}" method="post" id="loginform">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Login ID" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" id="captcha">
{{--                {!! Geetest::render() !!}--}}
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button id="login_submit" type="submit" disabled="disabled"  class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('module/AdminLTE/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('module/AdminLTE/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('module/AdminLTE/js/icheck.min.js') }}"></script>


<!-- 引入封装了failback的接口--initGeetest -->
<script src="http://static.geetest.com/static/tools/gt.js"></script>

{{--layer 弹出层--}}
<script src="{{ URL::asset('module/layer/layer.js') }}"></script>

<script>

    $(function () {
        verify_init();
        @if(session()->get('msg'))
            layer.alert("{{session()->get('msg')}}");
        @endif

    });

    var handlerEmbed = function (captchaObj) {
            captchaObj.appendTo("#captcha");
            captchaObj.onSuccess(function () {
                $('#login_submit').attr('disabled', false);
                $('#loginform').submit();
            });
        };
        var verify_init = function () {
            $.ajax({
                url: '{{ Config::get('geetest.url', 'geetest') }}?' + (new Date()).getTime(), // 加随机数防止缓存
                type: "get",
                dataType: "json",
                success: function (data) {
                    // 使用initGeetest接口
                    // 参数1：配置参数
                    // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                    initGeetest({
                        gt: data.gt,
                        challenge: data.challenge,
                        product: "float", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                        offline: !data.success, // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                        width: '100%'
                    }, handlerEmbed);
                }
            });
        }


</script>
</body>
</html>
