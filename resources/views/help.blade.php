@extends('app')

@section('content')
<h1>Api document</h1>
<p>王之博</p>
<h2>查询下载码为1234的文件信息</h2>
<h3>请求内容</h3>
<pre>GET /api/1234</pre>
<h3>返回内容</h3>
<p>json对象，如果成功则包含url字段，失败则包含message字段。</p>
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr><th>名称</th><th>必需</th><th>类型</th><th>描述</th></tr>
  </thead>
  <tbody>
    <tr><td>code</td><td>√</td><td>int</td><td>错误码</td></tr>
    <tr><td>url</td><td></td><td>string</td><td>下载地址</td></tr>
    <tr><td>message</td><td></td><td>string</td><td>错误信息</td></tr>
  </tbody>
</table>
<h3>错误码描述</h3>
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr><th>错误码</th><th>描述</th></tr>
  </thead>
  <tbody>
    <tr><td>0</td><td>成功</td></tr>
    <tr><td>-1</td><td>文件不存在</td></tr>
  </tbody>
</table>
<h2>上传文件</h2>
<h3>请求内容</h3>
<pre>POST /api
Content-Type: multipart/form-data; </pre>
<h4>表单数据</h4>
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr><th>name</th><th>type</th><th>描述</th></tr>
  </thead>
  <tbody>
    <tr><td>file</td><td>file</td><td>要上传的文件</td></tr>
  </tbody>
</table>
<h3>返回内容</h3>
<p>json对象，如果成功则包含value字段，失败则包含message字段。</p>
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr><th>名称</th><th>必需</th><th>类型</th><th>描述</th></tr>
  </thead>
  <tbody>
    <tr><td>code</td><td>√</td><td>int</td><td>错误码</td></tr>
    <tr><td>value</td><td></td><td>int</td><td>下载码</td></tr>
    <tr><td>message</td><td></td><td>string</td><td>错误信息</td></tr>
  </tbody>
</table>
<h3>错误码描述</h3>
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr><th>错误码</th><th>描述</th></tr>
  </thead>
  <tbody>
    <tr><td>0</td><td>成功</td></tr>
    <tr><td>-1</td><td>没有上传文件</td></tr>
    <tr><td>-2</td><td>腾讯云COS Api错误</td></tr>
    <tr><td>-3</td><td>MySQL数据库错误</td></tr>
  </tbody>
</table>
@endsection
