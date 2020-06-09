@extends('admin.layout.master')
@section('content')

<!-- Page Content -->
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>{{$tintuc->TieuDe}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
            @if(count($errors) > 0)
                    <div class = "alert alert-danger">
                        @foreach ($errors->all() as $err)
                        {{$err}}</br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                    {{session('thongbao')}}
                    </div>
                    @endif 
                <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            @foreach ($theloai as $tl)
                            <option 
                            @if($tintuc->loaitin->theloai->id == $tl->id)
                            {{"selected"}}
                            @endif
                            value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                            @foreach ($loaitin as $lt)
                            <option 
                            @if($tintuc->loaitin->id == $lt->id)
                            {{"selected"}}
                            @endif
                            value="{{$lt->id}}">{{$lt->Ten}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" vaule="$tintuc->TieuDe" />
                            </div>
                    
                            <div class="form-group">
                                <label>Tóm Tắt</label>
                                <textarea id="demo" name="TomTat"class="form-control ckeditor" rows="3">{{$tintuc->Tomtat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="NoiDung" class="form-control ckeditor" rows="3">{{$tintuc->NoiDung}}</textarea>
                            </div>

                            <div class ="form-group">
                                <label>Hình Ảnh</label> 
                                <p>
                                <img width ="400px" src="upload/tintuc/{{$tintuc->Hinh}}">
                                </P>
                                <input type="file" name="Hinh" class="form-control"/>
                            </div>

                            <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input 
                            @if ($tintuc->NoiBat == 0)
                                {{"checked"}}
                            @endif
                            name="NoiBat" 
                            value="0" 
                            type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input 
                                @if ($tintuc->NoiBat == 1)
                                    {{"checked"}}
                                @endif
                                name="NoiBat" 
                                value="1" 
                                type="radio">Có
                        </label>
                    </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper --> 
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#TheLoai").change(function() {
            var idTheLoai =$(this).val();
            $.get("admin/ajax/loaitin/"+idTheLoai, function(data) {
                $("#LoaiTin").html(data);
            })
        })
    })
</script>
@endsection