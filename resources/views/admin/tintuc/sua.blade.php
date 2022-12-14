@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>{{$tintuc->TieuDe}}</small>
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
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                @endif
                <form action="{{route('sua_tintuc',$tintuc->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select class="form-control" id="theloai">

                            @foreach($theloai as $tl)
                            <option @if ($tintuc->Loaitin->Theloai->id == $tl->id) {{"selected"}} @endif
                                value="{{$tl->id}}">{{$tl->Ten}}</option>

                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại Tin</label>
                        <select class="form-control" name="loaitin" id="loaitin">

                            @foreach($loaitin as $lt)
                            <option @if($tintuc->Loaitin->id == $lt->id) {{"selected"}} @endif value="{{$lt->id}}">{{$lt->Ten}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input class="form-control" name="tieude" value="{{$tintuc->TieuDe}}" />

                    </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <input class="form-control" name="tomtat" value="{{$tintuc->TomTat}}" />

                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea name="noidung" class="form-control ckeditor" rows="5">{{$tintuc->NoiDung}}</textarea>

                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>

                        <img src="resources/images/tintuc/{{$tintuc->Hinh}}" class="img-responsive"  width="100">

                        <input type="file" class="form-control" name="hinh" value="resources/images/tintuc/{{$tintuc->Hinh}}" />

                    </div>
                    <div class="form-group">
                        <label>Nổi Bật</label>
                        <label class="radio-inline">
                            <input name="noibat" value="0" checked="" type="radio" @if($tintuc->NoiBat == 0)
                            {{"checked"}}
                            @endif >Không

                        </label>
                        <label class="radio-inline">
                            <input name="noibat" value="1" type="radio" @if($tintuc->NoiBat == 1) {{"checked"}}

                            @endif >Có

                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Lưu Trữ</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@section("script")
<script>
$(document).ready(function() {
    $("#theloai").change(function() {
        var idtl = $(this).val();
        //console.log(idtl);
        $.get("admin/ajax/loaitin/" + idtl, function(data) {
            $("#loaitin").html(data);
        });
    });
});
</script>
@endsection