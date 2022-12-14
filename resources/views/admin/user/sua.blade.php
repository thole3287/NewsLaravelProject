@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Sửa thông tin User</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="{{route('sua_user',$user->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên User</label>
                        <input class="form-control" name="name" value="{{$user->name}}"  />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email"value="{{$user->email}}"   />
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" class="form-control" name="password"  />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="passwordAgain" />
                    </div>
                    <button type="submit" class="btn btn-default">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
@endsection