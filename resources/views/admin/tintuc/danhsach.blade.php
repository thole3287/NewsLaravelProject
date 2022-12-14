@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th >ID</th>
                        <th>Tiêu Đề</th>
                        <th>Tóm Tắt</th>
                        <th>Nội dung</th>
                        <th>Loại Tin</th>
                        <th>Hình</th>
                        <th>Số lượt xem</th>
                        <th>Nổi Bật</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tintuc as $tt)

                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->TieuDe}}</td>
                        <td>{{$tt->TomTat}}</td>
                        <td>{!! $tt->NoiDung !!}</td>
                        <td>{{$tt->loaitin->Ten}}</td>
                        <td> <img src="resources/images/tintuc/{{$tt->Hinh}}" alt="Hình" class="img-fluid"  width="150">  </td>
                        <td>{{$tt->SoLuotXem}}</td>
                        <td>{{$tt->NoiBat}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('xoa_tintuc',$tt->id)}}">
                                Xoá</a></td>

                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua_tintuc',$tt->id)}}">
                                Sửa</a></td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
            {{$tintuc->links()}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
