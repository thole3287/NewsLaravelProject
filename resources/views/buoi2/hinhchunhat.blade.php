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
        Tính Chu Vi - Diện Tích Hình Chữ Nhật
    </div>
    <table class="table table-success">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Hình Chữ Nhật</th>
                <th scope="col">Tính</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Chiều dài = 3.2m - Chiều Rộng = 13m</td>
                <td>
                    <a href="{{route('hinhchunhat',['cd'=>3.2,'cr'=>13])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Chiều dài = 13.2m - Chiều Rộng = 6.4m</td>
                <td>
                    <a href="{{route('hinhchunhat',['cd'=>13.2,'cr'=>6.4])}}" class="btn btn-warning">Tính</a>
                </td>
            </tr>
        </tbody>
        @if (isset($cv) && ($cv != ""))
            <tfoot class="alert alert-danger h5 text-center">
                <tr>
                    <td colspan="3">Chu vi = {{$cv}} - Diện tích = {{$dt}}</td>
                </tr>
            </tfoot>
        @endif
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>