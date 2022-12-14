<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tính lương</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Lương Ngày</label>
                       
                        <input type="text" name="luongngay" value="{{$luongngay}}" class="form-control" placeholder="Nhập lương ngày">
                        @if($errors->has("luongngay"))
                        <div class="text-danger"> {{$errors->first('luongngay')}}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ngày Công</label>
                       
                        <input type="text" name="ngaycong" value="{{$ngaycong}}" class="form-control" placeholder="Nhập ngày công">
                        @if($errors->has("ngaycong"))
                        <div class="text-danger"> {{$errors->first('ngaycong')}}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input type="submit"  value=" Tính Lương " class="btn btn-primary">
                    </div>
                </form>
                @if(isset($ketqua) && ($ketqua != ""))
                    <div class="alert alert-danger">{{$ketqua}}</div>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>