@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Nội Dung</th>
                        <th>Link</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slide as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sl->id}}</td>
                        <td>{{$sl->Ten}}</td>
                        <td> <img src="resources/images/slide/{{$sl->Hinh}}" alt="Hình" class="img-fluid"  width="150"> </td>
                        <td>{{$sl->NoiDung}}</td>
                        <td>{{$sl->link}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a
                                href="{{route('xoa_slide',$sl->id)}}">Xoá</a></td>

                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="{{route('sua_slide',$sl->id)}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection