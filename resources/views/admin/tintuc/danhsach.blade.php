@extends('admin.layout.master')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>danh sách</small>
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
                                <th>Tiêu đề</th>
                                <th>Tóm tắt</th>
                                <th>Nội dung</th>
                                <th>Thể loại</th>
                                <th>Nổi bật</th>
                                <th>Số lượt xem</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tintuc as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tt->id}}</td>
                                <td>
                                <p>{{$tt->TieuDe}}</p>
                                <img width="100px" src="upload/tintuc/{{$tt->Hinh}}"/>
                                </td>
                                <td>{{$tt->TomTat}}</td>
                                <td>{{$tt->NoiDung}}</td>
                                <td>{{$tt->loaitin->theloai->Ten}} </td>
                                <th>@if($tt->NoiBat == 0)
                                    {{'Không'}}
                                    @else
                                    {{'Có'}}
                                    @endif
                                </th>
                                <th>{{$tt->SoLuotXem}}</th>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a href="admin/tintuc/xoa/{{$tt->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$tt->id}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<!-- /#page-wrapper -->

@endsection