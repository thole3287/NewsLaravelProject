<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Diện tích và chu vi hình tròn</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="alert text-center h2 mt-2" style="background-color: #FCCB65; color:brown;">
                    DIỆN TÍCH và CHU VI HÌNH TRÒN
                </div>
                    <form action="" method="get" class="alert alert-warning">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Bán kính:</label>
                            <input type="text" name="bankinh" value="{{$r}}" class="form-control" placeholder="Nhập bán kính">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Diện tích</label>
                            @if(isset($r)&& ($dientich !=""))
                            <input type="text" name="dientich" style="background-color:#FDCAC9;" value="{{$dientich}}" class="form-control" readonly>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chu vi</label>
                            @if(isset($r) && ($chuvi != ""))
                            <input type="text" name="dientich" style="background-color:#FDCAC9;" value="{{$chuvi}}" class="form-control" readonly>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="tinh" value=" Tính " class="btn btn-primary">
                        </div>
                    </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>