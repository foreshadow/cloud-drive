<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>云优盘 - 北京交通大学</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container col-md-6 col-md-offset-3">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> --}}
          <a class="navbar-brand" href="/">云优盘</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            {{-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> --}}
            <p class="navbar-text">北京交通大学 虚拟化与云计算 2017 第五小组 作业</p>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/api">Api</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container col-md-6 col-md-offset-3">
      @yield('content')
      <hr>
      <footer>
        <p>北京交通大学 虚拟化与云计算 2017 第五小组</p>
        <p>蔡杰、陈皓泉、王之博（组长）、张梦翔、张帜、周明杰<small class="text-muted">（姓名按照汉语拼音排序）</small></p>
      </footer>
      <br>
    </div>
  </body>
</html>
