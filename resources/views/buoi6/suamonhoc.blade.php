@extends('buoi6.trangchung')
@section('content')
    <h1 class="alert alert-primary text-center">Thêm môn học mới</h1>
    <form action="#" method="post">
        @csrf
        <div class="form-group">
            <label class="h6" >Mã môn học</label>
            <input type="text" class="form-control bg-danger text-white" name="id" placeholder="Nhập tên môn học" value="{{$monhoc->id}}" readonly>
        </div>
        <div class="form-group">
            <label class="h6" >Tên môn học</label>
            <input type="text" class="form-control" name="tenmonhoc" placeholder="Nhập tên môn học" value="{{$monhoc->tenmonhoc}}">
            @if($errors->has("tenmonhoc"))
                    <div class="text-danger"> {{$errors->first('tenmonhoc')}}</div>
            @endif
        </div>
        <div class="form-group">
            <label class="h6">Số tín chỉ</label>
            <input type="text" class="form-control" name="sotinchi"  placeholder="Nhập số tín chỉ" value="{{$monhoc->sotinchi}}">
            @if($errors->has("sotinchi"))
                    <div class="text-danger"> {{$errors->first('sotinchi')}}</div>
            @endif
        </div>
        <div class="d-flex justify-content-center mt-2"><input type="submit" class="btn btn-primary" name="themmonhoc" value=" Lưu trữ "></div>
        
    </form>
@endsection