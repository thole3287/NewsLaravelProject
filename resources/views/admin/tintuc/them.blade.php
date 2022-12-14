@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">Tin Tức
                     <small>Thêm Mới</small>
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
                
                <form action="{{route('them_tintuc')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select class="form-control" id="theloai">
                            @foreach($theloai as $tl)
                            <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                            
                            </select>
                        </div>
                    <div class="form-group">
                        <label>Loại Tin</label>
                        <select class="form-control" name="loaitin" id="loaitin">
                            @foreach($loaitin as $lt)
                            <option value="{{$lt->id}}">{{$lt->Ten}}</option>
                            @endforeach
                            
                            </select>
                        </div>
                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input class="form-control" name="tieude" value="" />
                        </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <input class="form-control" name="tomtat" value="" />
                        </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea name="noidung" class="form-control ckeditor" rows="5"></textarea>
                        </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control" name="hinh" value="" />
                        </div>
                    <div class="form-group">
                        <label>Nổi Bật</label>

                        <label class="radio-inline">
                            <input name="noibat" value="0" checked="" type="radio">Không
                            </label>
                         <label class="radio-inline">
                             <input name="noibat" value="1" type="radio">Có
                             </label>
                         </div>
                     <button type="submit" class="btn btn-default">Lưu Trữ</button>
                     <button type="reset" class="btn btn-default">Làm Mới</button>
                     <form>
                        </div>
            
        </div>
    </div>
    
    <!-- /.container-fluid -->
    
</div>
@endsection
@section("script")
<script>
    $(document).ready(function() {
        $("#theloai").change(function() {
            var idtl = $(this).val();  //console.log(idtl);
            $.get("buoi7/admin/ajax/loaitin/" + idtl, function(data) {
                $("#loaitin").html(data); 
            }); 
        }); 
    }); 
</script>
@endsection