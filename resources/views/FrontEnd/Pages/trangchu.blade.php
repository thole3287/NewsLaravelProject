@extends("FrontEnd.Layout.master")
@section("content")
<div class="container">

<!-- slider -->
    @include("FrontEnd.Layout.slide")
<!-- end slide -->

<div class="space20"></div>


<div class="row main-left">
  <!-- menu -->
  @include("FrontEnd.Layout.menu")

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
            </div>

            <div class="panel-body">
                <!-- item -->
                @foreach($theloai as $tl)
                    @if(count($tl->loaitin)>0)
                        <div class="row-item row">
                            <h3>
                                <a href="category.html">{{$tl->Ten}}</a> |
                                @foreach($tl->loaitin as $lt)
                                <small><a href="{{route('loaitin', [$lt->id, $lt->TenKhongDau])}}"><i>{{$lt->Ten}}</i></a>/</small>
                                @endforeach
                            </h3>
                            
                            @php($data = $tl->TinTuc->where("NoiBat", "=", 1)->sortByDesc('id')->take(5))
                            @php($tin1 = $data->shift())
                            <!-- lấy ra 1 tin hiện cột bên trái, hàm shifft trả về dữ liệu kiểu mảng -->
                            <!-- @-->
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    
                                    <a href="{{ route('tintuc', [$tin1->id, $tin1->TieuDeKhongDau]) }}">
                                        @if(isset($tin1["Hinh"]))
                                            <img class="img-responsive" src="resources/images/tintuc/{{$tin1['Hinh']}}" alt="...">
                                        @else
                                            <img class="img-responsive" src="resources/images/tintuc/320x150.png" alt="....">
                                        @endif

                                    </a>
                                </div>

                                <div class="col-md-7">
                                    <h3>{{isset($tin1['TieuDe'])? $tin1['TieuDe']:"Tiêu đề trống"}}</h3>
                                    <p>{{isset($tin1['TomTat'])? $tin1['TomTat']:"Tóm Tắt trống"}}</p>
                                    <a class="btn btn-primary" href="{{ route('tintuc', [$tin1->id, $tin1->TieuDeKhongDau]) }}">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>

                            </div>


                            <div class="col-md-4">
                                @foreach($data as $tt)
                                <a href="{{ route('tintuc', [$tt->id, $tt->TieuDeKhongDau]) }}">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        {{isset($tt['TieuDe'])? $tt['TieuDe']:"Tiêu đề trống"}}                                    </h4>
                                </a>
                                @endforeach
                                
                                
                            </div>

                            <div class="break"></div>
                        </div>
                    @endif
                @endforeach
                <!-- end item -->


            </div>
        </div>
    </div>
</div>
<!-- /.row -->
</div>

@endsection