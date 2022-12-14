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
        <h1 class="alert alert-primary text-center">Thêm môn học mới</h1>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label class="h6" >Tên môn học</label>
                <input type="text" class="form-control" name="tenmonhoc" placeholder="Nhập tên môn học">
                @if($errors->has("tenmonhoc"))
                        <div class="text-danger"> {{$errors->first('tenmonhoc')}}</div>
                @endif
            </div>
            <div class="form-group">
                <label class="h6">Số tín chỉ</label>
                <input type="text" class="form-control" name="sotinchi"  placeholder="Nhập số tín chỉ">
                @if($errors->has("sotinchi"))
                        <div class="text-danger"> {{$errors->first('sotinchi')}}</div>
                @endif
            </div>
            <div class="d-flex justify-content-center mt-2"><input type="submit" class="btn btn-primary" name="themmonhoc" value=" Lưu trữ "></div>
        </form>
       
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>