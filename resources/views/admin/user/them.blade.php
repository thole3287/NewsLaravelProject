@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="panel panel-default">
                <div class="panel-heading h2 text-center">Đăng ký tài khoản</div>
                <div class="panel-body ">
                    <div class="col-lg-7 " style="padding-bottom:120px">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @else
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        @endif
                        <form action="{{route('them_user')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên User</label>
                                <input class="form-control" name="name"  />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"  />
                            </div>
                            <div class="form-group">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" name="password"  />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="passwordAgain" />
                            </div>
                            <button type="submit" class="btn btn-default">Đăng Ký</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                            <form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection