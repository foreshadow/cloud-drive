@extends('app')

@section('content')
  <h3>云优盘</h3>
  <h4>
    课件、作业、图片……<br>
    要分享、要打印？<br>
    上传、记下提取码、远程下载。<br>
    轻松传输小文件，<br>
    再也不用怕丢优盘了。
  </h4>
  <hr>
  <h3>上传文件</h3>
  <form class="form-inline" action="/" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="input-group">
      {{-- <span class="input-group-addon">选择文件</span> --}}
      <input class="input-sm form-control" type="file" name="file" required>
      <span class="input-group-btn">
        <button class="btn btn-sm btn-primary">上传</button>
      </span>
    </div>
    @if ($errors->has('upload'))
      <span class="text-danger">{{ $errors->first('upload') }}</span>
    @endif
    <br>
    @if ($errors->has('code'))
      <p class="text-success">上传成功！下载码为<span style="font-size: 48px;">{{ $errors->first('code') }}</span>。</p>
    @endif
  </form>
  <hr>
  <h3>下载文件</h3>
  <form class="form-inline" action="/download" method="get" enctype="multipart/form-data">
    <div class="input-group">
      <span class="input-group-addon">下载码</span>
      <input class="input-sm form-control" type="text" name="code" required>
      <span class="input-group-btn">
        <button class="btn btn-sm btn-primary">下载</button>
      </span>
    </div>
    @if ($errors->has('download'))
      <span class="text-danger">下载码无效</span>
    @endif
  </form>
@endsection
