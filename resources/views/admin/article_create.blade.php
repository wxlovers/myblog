@extends('admin_app')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <ol class="breadcrumb white-bg">
            <li>文章管理</li>
            <li class="active">创建文章</li>
        </ol>
    </div>
</div>

<div class="panel panel-default">

    <form id="article-form" class="form">
    {{ csrf_field() }}
        <div class="panel-heading white-bg" style="background-corlor:#fff">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group" style="margin-bottom:0;">
                        <label for="title" class="control-label sr-only">标题</label>

                            <input type="text" class="form-control" name="title" placeholder="请输入标题" value="">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <script id="ueditor" name="content" type="text/plain" class="edui-default" style='width:100%;height:300px;'>
                        
                    </script>
                </div>
            </div>  
        </div>
    </form>
    
</div>

<script>
    var ue=UE.getEditor("ueditor");
    ue.ready(function(){
         //因为Laravel有防csrf防伪造攻击的处理所以加上此行
         ue.execCommand('serverparam','_token','{{ csrf_token() }}');
    });
</script>

@stop
