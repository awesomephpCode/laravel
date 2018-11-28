<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <script src="{{ URL::asset('/module/AdminLTE/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/module/AdminLTE/css/bootstrap3-wysihtml5.min.css') }}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    {{--自定义css 表格边框背景文件--}}
    <link rel="stylesheet" href="{{ URL::asset('/module/custom/css.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <title>标题</title>
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">
    <!-- 顶部菜单栏 -->
    <header class="main-header">

        <!-- logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>{{config('custom.title_min')}}</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{config('custom.title')}}</b></span>
        </a>

        <!-- 菜单栏 -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- 右上角部分-->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Login Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="{{route('admin/modify')}}" class="dropdown-toggle">
                            <!-- The user_head image in the navbar-->
                            <img src="{{session('admin')->avatar}}" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{session('admin')->username}}</span>
                        </a>
                        <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                    <li>
                        <a href="{{route('admin/out')}}"><i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--左侧菜单栏-->
    <aside class="main-sidebar">
        <!-- 用户 -->
        <section class="sidebar">
            <!-- 大头像 -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{session('admin')->avatar}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info" style="size: 18px">
                    <h5>{{session('admin')->username}}</h5>
                    <!-- Status -->
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">列表</li>
                <li><a href="{{route('home')}}"><i class="fa fa-tachometer"></i><span>主页</span></a></li>
            </ul>
            <!-- 左侧菜单栏结束-->
        </section>
    </aside>

    @yield('content')

    {{--主题内容--}}
    {{--<div class="content-wrapper">--}}
        {{--<!-- 页面标题 -->--}}
        {{--<section class="content-header">--}}
            {{--<h1>--}}
                {{--大标题--}}
                {{--<small>小标题</small>--}}
            {{--</h1>--}}
        {{--</section>--}}
        {{--<!-- 主体内容开始 -->--}}
        {{--<section class="content container-fluid">--}}

            {{--<!----------------------------}}
              {{--| 内容写在这里 |--}}
              {{---------------------------->--}}
        {{--</section>--}}
        {{--<!-- 内容结束 -->--}}
    {{--</div>--}}
    {{--主题内容--}}

    <footer class="main-footer">
        <!-- 右边 -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- 左边-->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- 右侧隐藏控制栏 -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!--->
    <!--页面最底部-->
    <!-- 添加边栏的背景。必须放置此div。 -->
    <div class="control-sidebar-bg"></div>
</div>

<!-- 结束 -->
<script src="{{ URL::asset('/module/AdminLTE/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('/module/AdminLTE/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('/module/AdminLTE/js/adminlte.min.js') }}"></script>
<script src="{{ URL::asset('/module/AdminLTE/js/demo.js') }}"></script>

{{--ajxs上传图片文件--}}
<script src="{{ URL::asset('/module/custom/AjaxUploader.min.js') }}"></script>
{{--layer 弹出层--}}
<script src="{{ URL::asset('/module/layer/layer.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        @if(session()->get('msg'))
            layer.alert("{{session()->get('msg')}}");
        @endif

        //删除操作 询问层
        $('.ask').on('click',function () {
            if($('.many').is(':checked')) {
                layer.confirm("你确定要删除吗？ 删除后数据将无法恢复",{
                    btn:['确定','取消']
                }, function () {
                    $('.ask_form').submit();
                }, function () {
                });
            }else{
                layer.alert('未选中');
                return false;
            }
        });

        //菜单点击选中
        var url = document.location.href;
        var index1 = url.lastIndexOf('/');
        var page_name = url.substring(index1 + 1, url.length);
        var a_l = $('a');
        a_l.each(function () {
            var that = $(this);
            var url2 = that.attr('href');
            var index2 = url2.lastIndexOf('/');
            var page_name2 = url2.substring(index2 + 1, url2.length);
            if (page_name == page_name2) {
                $(this).parent().addClass('active');
                $(this).parent().parent().parent().addClass('open');
            }
        });

    });
</script>

{{--自定义js文件--}}
@yield('js')

</body>
</html>
