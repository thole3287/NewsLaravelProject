<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <base href="{{asset('')}}">
    <title>Trang chủ</title>
</head>

<body>
    <div class="container">
        <div class="float-start">
            <img src="resources/images/bk.png" width="70"> TTĐTBK
        </div>
        <form class="d-flex float-end p-2">
            <input class="form-control me-2" type="search" placeholder="Nhập từ khóa" aria- label="Search">
            <button class="btn btn-outline-success" type="submit"> Tìm </button>
        </form>
        <ul class="nav nav-pills justify-content-center p-2">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Môn Học</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('danhsachmonhoc')}}">Liệt kê</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{route('themmonhoc')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Khoa</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item"href="{{route('danhsachkhoa')}}">Liệt kê</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{route('themkhoa')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Sinh viên</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Liệt kê</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item">Thêm mới</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Kết quả</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Liệt kê</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item">Thêm mới</a></li>
                </ul>
            </li>
        </ul>
        <!-- content -->
        <div class="container mt-1 bg-info" style="clear:both"> 
            @yield('content')
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>