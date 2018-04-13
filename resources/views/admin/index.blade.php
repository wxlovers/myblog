

@extends('app')
@section('content')

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span> 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎管理员使用博客后台管理系统
				<span class="f-14"></span>
				</p>
			<p>登录次数：18 </p>
			<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName">{{ $_SERVER['SERVER_NAME'] }}</span></td>
			</tr>
					<tr>
						<td>服务器IP地址</td>
						<td>{{ $_SERVER['SERVER_ADDR'] }}</td>
			</tr>
					<tr>
						<td>服务器域名</td>
						<td>{{ $_SERVER['HTTP_HOST'] }}</td>
			</tr>
					<tr>
						<td>服务器端口 </td>
						<td>{{ $_SERVER['SERVER_PORT'] }}</td>
			</tr>
					<tr>
						<td>服务器IIS版本 </td>
						<td>Microsoft-IIS/6.0</td>
			</tr>
					<tr>
						<td>本文件所在文件夹 </td>
						<td>{{ $_SERVER['DOCUMENT_ROOT'] }}</td>
			</tr>
					<tr>
						<td>服务器操作系统 </td>
						<td>{{ PHP_OS }}</td>
			</tr>
					<tr>
						<td>系统所在文件夹 </td>
						<td>$_SERVER['SCRIPT_NAME']</td>
			</tr>
					<tr>
						<td>服务器脚本超时时间 </td>
						<td>300秒</td>
			</tr>
					<tr>
						<td>服务器的语言种类 </td>
						<td>Chinese (People's Republic of China)</td>
			</tr>
					<tr>
						<td>服务器当前时间 </td>
						<td>{{ date('Y-m-d H:i:s') }}</td>
			</tr>
					<tr>
					<tr>
						<td>当前Session数量 </td>
						<td>8</td>
			</tr>
					<tr>
						<td>当前SessionID </td>
						<td>gznhpwmp34004345jz2q3l45</td>
			</tr>
					<tr>
						<td>当前系统用户名 </td>
						<td>{{ $_SERVER['SERVER_ADMIN'] }}</td>
			</tr>
		</tbody>
	</table>
</article>
</div>
</section>

@stop