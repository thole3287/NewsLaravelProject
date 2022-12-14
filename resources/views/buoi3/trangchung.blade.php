<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <base href="{{asset('')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark text-light h1 d-flex justify-content-center">
                ĐỌC THƠ - TRUYỆN - VĂN TRỰC TUYẾN
            </nav>
            <nav class="nav fs-4 bg-light">
                <a class="nav-link active" href="{{route('thome')}}">Thơ về mẹ</a>
                <a class="nav-link active" href="{{route('ngungon')}}">Truyện ngụ ngôn</a>
                <a class="nav-link active" href="{{route('binhluan')}}">Bạn đọc bình luận</a>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="resources/images/tuoitre.webp" class="img-fluid" alt="hình ảnh tuổi trẻ đáng giá bao nhiêu">
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="py-5 my-2 bg-dark position-sticky">
                <p class="m-0 text-center text-white">
                    Bản quyền bởi &copy; BKACAD &copy; 2020-2022
                </p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>