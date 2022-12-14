@extends('buoi6.trangchung')
@section('content')
<H2 class="mt-2 text-center p-3">DANH SÁCH KHOA</H2 class="mt-2">
<div class="bg-light text-dark">
   <div class="p-2"> <a href="{{route('themkhoa')}}" class=" mt-2 btn btn-primary">Thêm Khoa</a></div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã Khoa</th>
            <th scope="col">Tên khoa</th>           
            <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dskhoa as $khoa)
            <tr>
                <th scope="row">{{$khoa->makhoa}}</th>
                <td>{{$khoa->tenkhoa}}</td>
                <td><a href="{{route('suakhoa', $khoa->makhoa)}}" class="btn btn-primary">Sửa</a> | <a href="{{route('xoakhoa', $khoa->makhoa)}}" class="btn btn-danger">Xóa</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" class="text-center">Tổng số môn: {{$dskhoa->count()}}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection