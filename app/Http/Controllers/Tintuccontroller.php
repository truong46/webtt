<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\TinTuc;
use App\LoaiTin;

class Tintuccontroller extends Controller
{
    public function getDanhsach()
    {
        $tintuc = TinTuc::all();
        return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
    }
    public function postThem( Request $request)
    {
        $this->validate($request,
        [
            'LoaiTin'=>'required',
            'TieuDe'=>'required|unique:TinTuc,TieuDe|min:3',
            'TomTat'=>'required',
            'NoiDung'=>'required',
        ],
        [
            'LoaiTin.required'=>'Bạn chưa nhập tên loại tin',
            'TieuDe.required'=>'Bạn chưa nhập tên tiêu đề',
            'TieuDe.unique'=>'Tiêu đề đã tồn tại',
            'TieuDe.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
            'TomTat.required'=>'Bạn chưa nhập tóm tắt',
            'NoiDung.required'=>'Bạn chưa nhập nội dung',

        ]);
        $tintuc = new TinTuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
        $tintuc->idLoaiTin = $request->LoaiTin;
        $tintuc->SoLuotXem = 0;

        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg")
            {
                return redirect()->back()->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$Hinh)) {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$Hinh);
            $tintuc->Hinh = $Hinh;
        } else {
            $tintuc->Hinh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Thêm thành công');
    }
    
    public function getThem()
    {
        $theloai = TheLoai::all(); 
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.them',['theloai'=>$theloai],['loaitin'=>$loaitin]);
    }
    public function getSua($id)
    {   
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        $tintuc = TinTuc::find($id);
        return view('admin.tintuc.sua',['theloai'=>$theloai,'loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    public function postSua(Request $request, $id)
    {
        $tintuc = TinTuc::find($id);
        $this->validate($request,
        [
            'LoaiTin'=>'required',
            'TieuDe'=>'required|unique:TinTuc,TieuDe|min:3',
            'TomTat'=>'required',
            'NoiDung'=>'required',
        ],
        [
            'LoaiTin.required'=>'Bạn chưa nhập tên loại tin',
            'TieuDe.required'=>'Bạn chưa nhập tên tiêu đề',
            'TieuDe.unique'=>'Tiêu đề đã tồn tại',
            'TieuDe.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
            'TomTat.required'=>'Bạn chưa nhập tóm tắt',
            'NoiDung.required'=>'Bạn chưa nhập nội dung',

        ]);
        $tintuc = new TinTuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
        $tintuc->idLoaiTin = $request->LoaiTin;

        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg")
            {
                return redirect()->back()->with('loi', 'Chỉ được chọn file jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $tenhinh = str_random()."_".$name;
            while(file_exists("upload/tintuc/".$tenhinh)) {
                $tenhinh = str_random()."_".$name;
            }
            $file->move("upload/tintuc",$tenhinh);
            $tintuc->Hinh = $tenhinh;
        } else {
            $tintuc->Hinh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }

}