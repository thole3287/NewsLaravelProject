<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Trung Tâm">
    <meta name="author" content="">
    <title>Quản Trị Tin Tức</title>
    <base href="{{asset('')}}" />
    <!-- Bootstrap Core CSS -->
    <link href="resources/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="resources/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="resources/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="resources/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vui Lòng Đăng Nhập</h3>
                    </div>
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @else
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                    @endif

                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-group">

                                    <input class="form-control" placeholder="E-mail" name="email" type="email"
                                        autofocus>

                                </div>
                                <div class="form-group">

                                    <input class="form-control" placeholder="nhập mật khẩu" name="password"
                                        type="password" value="">

                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="resources/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="resources/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="resources/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="resources/admin/dist/js/sb-admin-2.js"></script>
</body>