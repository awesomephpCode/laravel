@extends('common.common')
{{--@include('welcome')--}}


@section('content')
  <div class="content-wrapper">
    <!-- 内容标题 -->
    <section class="content-header">
      <h1>
        主页
      </h1>
    </section>
    <!-- 主体内容开始 -->
    <section class="content container-fluid">
      这里是主页
    </section>
    <!-- 内容结束 -->
  </div>
@endsection
@section('js')
  <script>
      $(document).ready(function() {

      });

  </script>
@endsection
