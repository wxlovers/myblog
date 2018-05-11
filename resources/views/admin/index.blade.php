@extends('admin_app')
@section('content')


<div class="row">
	<div class="col-xs-12">
	<div class="panel panel-default ">
            <div class="panel-heading white-bg" style="background-color:#fff;">
				<h3 class="text-center">服务器信息</h3>
				<div class="row">
					<div class="col-xs-6">
						<div class="text-center text-success">
							上次登录ip地址 : 172.16.1.122
						</div>
					</div>
					<div class="col-xs-6">
						<div class="text-center text-center text-success">
							上次登录时间 : {{ date('Y-m-d H:i:s') }}
						</div>
					</div>
				</div>
			</div>
	</div>

		<div class="panel-body white-bg">
			<div class="tab-content as-box ">
				<div role="tabpanel" class="tab-pane active ">
					<table class="table table-striped table-hover blog-table" id="data-table">
						<tbody>
							<tr>
								<td width="20%"></td>
								<th style="width:35%">服务器计算机名</th>
								<td><span id="lbServerName">{{ $_SERVER['SERVER_NAME'] }}</span></td>
							</tr>  
							
							<tr>
							<td width="20%"></td>
								<th>服务器IP地址</th>
								<td>{{ $_SERVER['SERVER_ADDR'] }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器域名</th>
								<td>{{ $_SERVER['HTTP_HOST'] }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器端口 </th>
								<td>{{ $_SERVER['SERVER_PORT'] }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>本文件所在文件夹 </th>
								<td>{{ $_SERVER['DOCUMENT_ROOT'] }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器操作系统 </th>
								<td>{{ PHP_OS }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>系统所在文件夹 </th>
								<td>$_SERVER['SCRIPT_NAME']</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器脚本超时时间 </th>
								<td>300秒</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器的语言种类 </th>
								<td>Chinese (People's Republic of China)</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>服务器当前时间 </th>
								<td>{{ date('Y-m-d H:i:s') }}</td>
							</tr>

							<tr>
							<td width="20%"></td>
								<th>当前SessionID </th>
								<td>{{ session_id() }}</td>
							</tr>
							
							<tr>
							<td width="20%"></td>
								<th>当前系统用户名 </th>
								<td>{{ $_SERVER['SERVER_ADMIN'] }}</td>
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<td>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			<div>
		</div>
	</div>
</div>

@stop