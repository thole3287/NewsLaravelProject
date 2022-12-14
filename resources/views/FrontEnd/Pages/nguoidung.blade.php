@extends("FrontEnd.Layout.master")
@section("content")
 <!-- Page Content -->
 <div class="container">

<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
              <div class="panel-heading">Thông tin tài khoản</div>
              <div class="panel-body">
              @if ($message = Session::get("thongbao"))
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @endif
                <form  action="{{route('nguoidung')}}" method="post">
                    <div>
                        <label>Họ tên</label>
                          <input type="text" class="form-control" placeholder="Username" value="{{$user->name}}" name="name" aria-describedby="basic-addon1">
                          @if($errors->has('name'))
                            <div class="text-danger">{{$errors->first('name')}}</div>
                          @endif
                        </div>
                    <br>
                    <div>
                        <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" aria-describedby="basic-addon1"
                          disabled
                          >
                        
                    </div>
                    <br>
                    <div>
                        <input type="checkbox" name="changepassword" id="changepassword">
                        <label>Đổi mật khẩu</label>
                          <input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled>
                          @if($errors->has('password'))
                            <div class="text-danger">{{$errors->first('password')}}</div>
                          @endif
                    </div>
                    <br>
                    <div>
                        <label>Nhập lại mật khẩu</label>
                          <input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled>
                          @if($errors->has('passwordAgain'))
                            <div class="text-danger">{{$errors->first('passwordAgain')}}</div>
                          @endif
                    </div>
                    <br>
                    <button type="submit" class="btn btn-default">Sửa
                    </button>

                </form>
              </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->
@endsection

@section("script")
    <script>
        $(document).ready(function(){
            $("#changepassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection