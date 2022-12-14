@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Sữa thông tin</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @else
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                @endif
                <form action="{{route('sua_slide',$slide->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="ten" value="{{$slide->Ten}}" />
                    </div>
                    <div class="form-group">
                        <label>Hình</label>
                        <input class="form-control" name="hinh"  value="{{$slide->Hinh}}" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input class="form-control" name="noidung" value="{{$slide->NoiDung}}" />
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" value="{{$slide->link}}" />
                    </div>
                    <button type="submit" class="btn btn-default">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
@endsection