@extends("FrontEnd.Layout.master")
@section("content")
<!-- Page Content -->
<div class="container">

<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
              <div class="panel-heading">Đăng nhập</div>
              <div class="panel-body">
              @if ($message = Session::get("thongbao"))
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @endif
                <form action="{{route('dangnhap')}}" method="post">
                    @csrf
                    <div>
                        <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email">
                          @if($errors->has('email'))
                            <div class="text-danger">{{$errors->first('email')}}</div>
                          @endif
                    </div>
                    <br>
                    <div>
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password">
                        @if($errors->has('password'))
                            <div class="text-danger">{{$errors->first('password')}}</div>
                        @endif
                    </div>
                    <br>
                    <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button> -->
                    <!-- <button type="submit" class="btn btn-default">Đăng nhập</button> -->
                    <!-- 2 column grid layout for inline styling -->
                      <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <!-- Simple link -->
                          <a href="#!">Forgot password?</a>
                        </div>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                      <!-- Register buttons -->
                      <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-github"></i>
                        </button>
                      </div>
                </form>
              </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->
@endsection