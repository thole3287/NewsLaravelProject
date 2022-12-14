<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <H2 class="mt-2">QUẢN LÝ THÔNG TIN MÔN HỌC</H2 class="mt-2">
        <a href="{{route('themmonhoc')}}" class=" mt-2 btn btn-primary">Thêm môn học</a>
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
                @foreach($dsMonHoc as $mh)
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
                    <th colspan="4" class="text-center">Tổng số môn: {{$dsMonHoc->count()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>