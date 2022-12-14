@extends('buoi6.trangchung')
@section('content')
    <div class="p-3">
    <h1 class="alert alert-primary text-center" >Thêm khoa</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label class="h6" >Khoa</label>
            <input type="text" class="form-control" name="tenkhoa" placeholder="Nhập tên Khoa">
            @if($errors->has("tenkhoa"))
                    <div class="text-danger"> {{$errors->first('tenkhoa')}}</div>
            @endif
        </div>
        <div class="d-flex justify-content-center mt-2"><input type="submit" class="btn btn-primary" name="themkhoa" value=" Lưu trữ "></div>
    </form>
    </div>
@endsection