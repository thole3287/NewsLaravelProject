@extends('buoi6.trangchung')
@section('content')
<H2 class="mt-2 text-center p-3">DANH SÁCH MÔN HỌC</H2 class="mt-2">
<div class="bg-light text-dark">
   <div class="p-2"> <a href="{{route('themmonhoc')}}" class=" mt-2 btn btn-primary">Thêm môn học</a></div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã môn học</th>
            <th scope="col">Tên môn học</th>
            <th scope="col">Số tín chỉ</th>
            <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsmonhoc as $mh)
            <tr>
                <th scope="row">{{$mh->id}}</th>
                <td>{{$mh->tenmonhoc}}</td>
                <td>{{$mh->sotinchi}}</td>
                <td><a href="{{route('suamonhoc', $mh->id)}}" class="btn btn-primary">Sửa</a> | <a href="{{route('xoamonhoc', $mh->id)}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" class="text-center">Tổng số môn: {{$dsmonhoc->count()}}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection