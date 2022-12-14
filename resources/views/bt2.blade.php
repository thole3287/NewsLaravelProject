<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        nav {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                color: #fff;
                margin-left:auto;
                margin-right:auto;
                background-color: black;
                padding: 5px;
                height: 38px;
                width: 900px;
                font-weight: bold;
                border-color: #000;
                border-radius: 20px;
            }
            nav ul {
                padding: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;

            }
            nav ul li {
                list-style-type: none;
                text-align: center;
                float: left;
                
            }
            nav ul li a {
                text-decoration: none;
                color: white;
                text-align: center;
                display: block;
                padding: 10px;
               
            }
            nav ul li a:hover {
                color: #CD0000;
                background-color: white;
            }
            

    </style>
</head>
<body >
    <div >
        <nav >
            <ul >
                <li><a href="{{route('thome')}}">Bảng Dữ Liệu</a></li>
                <li><a href="{{route('ctdt')}}">Biểu Mẫu</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Hỏi đáp</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>