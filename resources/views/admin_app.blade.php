

<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width">
    <!-- <link rel='stylesheet' href="{{ URL::asset('css/all.css') }}" type='text/css' media='all'/> -->
    <link rel='stylesheet' href="{{ URL::asset('css/bootstrap.min.css') }}" type='text/css' media='all'/>
    <link rel='stylesheet' href="{{ URL::asset('css/myblog.css') }}" type='text/css' media='all'/>
    @include('UEditor::head')
    <script src=" /js/jquery.min.js"></script>
    <title>博客后台管理</title>
    <style>
        header {
            background-color: #2c3345;
            padding: 20px 0px 20px 0;
        }
        .header-title {
            font-size: 20px;
            color: #fff;
        }
        .text-white {
            color: #fff;
        }
        .left-nav{
            color: #fff;
            padding:10px 0 10px 30px;
        }
        a:hover { 
            text-decoration: none;
        }
        .nav-hover {
            background-color: #2c3345;
        }

    </style>
</head>

<body>
    <header id="blog-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <div class="header-title">爱文学博客后台管理平台</div>
                </div>
                <div class="col-xs-6 text-right">
                    <div class="header-right">
                        <span class="text-white">
                            超级管理员
                        </span>&nbsp;&nbsp;
                    
                        <span class="text-white">
                            wxlovers
                        </span>&nbsp;&nbsp;
                        <a class="logout text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">退出</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid" id="blog-box">
        <div class="row">
            <div class="col-xs-2" id="left-box" style="min-height:600px;margin-left:0; padding:0;background-color: #3a4151">
                <div id="left-nav-div">               
                    <a href="#"><div class="left-nav"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;&nbsp;总览信息</div></a>
                    <a href="#"><div class="left-nav"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> &nbsp;&nbsp;文章管理</div></a>
                    <a href="#"><div class="left-nav"> <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> &nbsp;&nbsp;图片管理</div></a>
                    <a href="#"><div class="left-nav"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp;管理员管理</div></a>
                    <a href="#"><div class="left-nav"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> &nbsp;&nbsp;回收站</div></a>
                    <a href="#"><div class="left-nav" > <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  &nbsp;&nbsp;系统信息</div></a>
                </div>
            </div>
            <div class="col-xs-10" id="right-box" style="min-height:600px; padding:20px 5px 20px 5px; background-color: #edf2f5;">
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>

    <footer id="footer" style="padding:40px;">
        <div class="container-fluid">
            <div class="row" >
                <h3 class="text-center" >wxlovers博客后台管理</h3>
            </div>
        </div>
    </footer>




</body>
<script type="text/javascript">

    //左侧导航 鼠标悬浮样式
    $("#left-nav-div .left-nav").hover(function() {
        $(this).addClass('nav-hover');
    }, function() {
        $(this).removeClass('nav-hover');
    });

    //左侧导航长度限制
   var height =  $('#right-box').outerHeight(true);
   $('#left-box').height(height);
    console.log(height);


/**
 * 设置左侧菜单树上的菜单项为选中状态。
 */
function setMenuItemSelected() {
    var uri = '';

    if (!uri || uri.length == 0) return;
    var parts = uri.split('/');
    if (parts.length >= 2) {
        if ($('#m2-' + parts[0] + '-' + parts[1]).length > 0) {
            $('#m2-' + parts[0] + '-' + parts[1]).addClass('selected');
        } else {
            $('#m2-' + parts[0]).addClass('selected');
        }
    } else if (parts.length >= 1) {
        $('#m2-' + parts[0]).addClass('selected');
    }
}

/** 返回顶部按钮 */
function goTop() {
    //返回顶部
    var windowWidth = $(window).width();//获取屏幕可视区域的宽度
    var windowHeight = $(window).height();//获取屏幕可视区域的高度
    //创建返回顶部按钮元素 距底部40px 距右20px
    var backTopButton = $('<div class="back-top-button">').attr('title','返回顶部').css('top',windowHeight - 100).css('left',windowWidth - 68);
    var backTopIcon = $('<img>').attr('src',"");
    backTopIcon.appendTo(backTopButton);
    backTopButton.appendTo($('body'));
    var scrollTop = '';
    //设置返回顶部按钮显示的条件
    $(window).scroll(function() {
        scrollTop = $(window).scrollTop();
        if (scrollTop > 100) { //如果页面的滚动距离超过100像素 返回顶部按钮显示
            $('.back-top-button').fadeIn();
        } else { //否则影藏返回顶部按钮
            $('.back-top-button').fadeOut();
        }
    });
    $('.back-top-button').click( function () {
        $('body,html').animate({scrollTop:0},500);
        return false;
    });
}
</script>

</html>


