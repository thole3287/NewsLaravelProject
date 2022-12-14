<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Hình Chữ Nhật</title>
</head>
<body>
<div class="container">
    <div class="alert alert-primary text-center h2">
        Tìm các nghiệm phương trình sau đây
    </div>
    <table class="table table-success">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Phưng trình</th>
                <th scope="col">Tính</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>3X + 20 = 0</td>
                <td>
                    <a href="{{route('phuongtrinh',['a'=>3,'b'=>20])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>0X + 0 = 0</td>
                <td>
                    <a href="{{route('phuongtrinh',['a'=>0,'b'=>0])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>2X - 9 = 0</td>
                <td>
                    <a href="{{route('phuongtrinh',['a'=>2,'b'=>-9])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>0X - 10 = 0</td>
                <td>
                    <a href="{{route('phuongtrinh',['a'=>0,'b'=>-10])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>3X - 17 = 0</td>
                <td>
                    <a href="{{route('phuongtrinh',['a'=>3,'b'=>-17])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
        </tbody>
        @if (isset($ketqua) && ($ketqua != ""))
            <tfoot class="alert alert-danger h5 text-center">
                <tr>
                    <td colspan="3">{{$ketqua}}</td>
                </tr>
            </tfoot>
        @endif
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>