<?php
	$ip = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>IP地址查询 - IPInfo</title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./layui/css/layui.css">
	<link rel="stylesheet" href="./static/style.css">
</head>
<body>
	<!--导航菜单-->
	<div class="menu">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-lg12">
					<div class="logo"><a href="./" title = "IPinfo"><img src="./static/newlogo.png" alt=""></a></div>
					<div class = "layui-hide-xs themenu">
						<ul class="layui-nav" lay-filter="">
						  <li class="layui-nav-item layui-this"><a href="./">首页</a></li>
						  <li class="layui-nav-item"><a href="">源码</a></li>
						  <li class="layui-nav-item"><a href="">API</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--导航菜单END-->
	<!--内容部分-->
	<div class="layui-container content">
		<div class="layui-row">
			<div class="layui-col-lg10 layui-col-md-offset1">
				<table class="layui-table layui-form" lay-even="" lay-skin="nob">
				  <tbody>
				    <tr>
				      	<td width="75%">
						   	<input id="ip" type="text" required="" lay-verify="required" placeholder="请输入URL地址" autocomplete="off" class="layui-input" data-cip-id="url">
					    </td>
					    <td width="15%">
					      <select name="" lay-verify="required" id="type">
					        <option value="default">查询接口</option>
					        <option value="ipip">IPIP.NET</option>
					        <option value="taobao">淘宝</option>
					        <option value="sina">新浪</option>
					        <option value="geoip">GeoIP</option>
					      </select>
					    </td>
				      	<td width="10%"><button type="submit" class="layui-btn layui-btn" id="btn">查 询</button></td>
				    </tr>
				  </tbody>
				</table>
				<div id="myip">
					<h3>您当前IP:<code id = "getip"><?php echo $ip; ?></code></h3>
				</div>
				<!--返回IP查询结果-->
				<div id = "ipinfo">
					<h1 style = "text-align:center;">来自 <span id = "api"></span> 的数据</h1>
					<table class="layui-table">
					  <colgroup>
					    <col width="150">
					    <col width="150">
						<col width="150">   
					    <col width="150">
						<col width="150">
						<col>
					  </colgroup>
					  <thead>
					    <tr>
					      <th>IP</th>
					      <th>国家</th>
					      <th>省</th>
					      <th>市</th>
					      <th>区/县</th>
					      <th>运营商</th>
					    </tr> 
					  </thead>
					  <tbody>
					    <tr>
					      <td id = "reip"></td>
					      <td id = "country"></td>
					      <td id = "region"></td>
					      <td id = "city"></td>
					      <td id = "county"></td>
					      <td id = "isp"></td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<!--返回IP查询结果END-->
			</div>
		</div>
	</div>
	<!--内容部分END-->
	<!--底部-->
	<div class="footer">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-lg12">
					Copyright Ⓒ 2017-2018 Powered by xiaoz.me
				</div>
			</div>
		</div>
	</div>
	<!--底部END-->
	<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
	<script src="./layui/layui.js"></script>
	<script src = "./static/embed.js"></script>
</body>
</html>