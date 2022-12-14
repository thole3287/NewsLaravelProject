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
                    THANH TOÁN TIỀN ĐIỆN
                </div>
                    <form action="" method="get" class="alert alert-warning">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tên chủ hộ</label>
                            <input type="text" name="ten" value="{{$ten}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chỉ số cũ</label>
                        
                            <input type="text" name="chisocu" style="background-color:#FDCAC9;" value="{{$chisocu}}" class="form-control">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chỉ số mới</label>
                          
                            <input type="text" name="chisomoi" style="background-color:#FDCAC9;" value="{{$chisomoi}}" class="form-control" >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Đơn giá</label>
                            
                            <input type="text" name="dongia" value="{{$dongia}}" class="form-control">
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số tiền thanh toán</label>
                            @if(($tienthanhtoan != ""))
                            <input type="text" name="tienthanhtoan" value="{{$tienthanhtoan}}" class="form-control" readonly>
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