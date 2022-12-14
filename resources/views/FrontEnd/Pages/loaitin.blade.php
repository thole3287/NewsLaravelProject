@extends("FrontEnd.Layout.master")
@section("content")
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            @include("FrontEnd.Layout.menu")
            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>{{$loaiTin->Ten}}</b></h4>
                    </div>
                    @foreach($tinTuc as $tt)
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="{{ route('tintuc', [$tt->id, $tt->TieuDeKhongDau]) }}">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="resources/images/tintuc/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{$tt->TieuDe}}</h3>
                            <p>{{$tt->TomTat}}</p>
                            <a class="btn btn-primary" href="{{route('tintuc', [$tt->id, $tt->TieuDeKhongDau])}}">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                    @endforeach
                    
                    <!-- pagination -->
                    {{$tinTuc->links()}}

                        
    <!-- end Page Content -->
@endsection