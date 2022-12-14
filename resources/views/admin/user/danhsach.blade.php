@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Danh sách User</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $ur)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ur->id}}</td>
                        <td>{{$ur->name}}</td>
                        <td>{{$ur->email}}</td>
                        <td>{{$ur->password}}</td>
                        <td>{{$ur->created_at}}</td>
                        <td>{{$ur->updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a
                                href="{{route('xoa_user',$ur->id)}}">Xoá</a></td>
                                
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