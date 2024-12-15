<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhVienController extends Controller
{
    // CRUD
    public function index()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $sinhViens = SinhVien::all();
        return view('sinhvien.index', ['sinhViens'=>$sinhViens]);
    }
    #Create Form
    public function create()
    {
        return view('sinhvien.create');
    }
    public function createSubmit(Request $request)
    {
        DB::insert('insert into nvksinhvien(MaSV, HoSV, TenSV, Phai, NgaySinh, NoiSinh, MaKH, HocBong, DiemTB) values(?,?,?,?,?,?,?,?,?)',
        [$request->MaSV,$request->HoSV,$request->TenSV,$request->Phai,$request->NgaySinh,$request->NoiSinh,$request->MaKH,$request->HocBong,$request->DiemTB]);
        return redirect('/sinhvien');
    }
    #Sửa
    public function edit($masv)
    {
        $sinhvien = DB::table('nvksinhvien')->where('MaSV',$masv)->first();
        return view('sinhvien.edit',['sinhvien'=>$sinhvien]);
    }
    public function editSubmit(Request $request)
    {
        DB::table('nvksinhvien')
            ->where('MaSV',$request->MaSV)
            ->update(
            [
                'MaSV' =>$request->MaSV,
                'HoSV' =>$request->HoSV,
                'TenSV' =>$request->TenSV,
                'Phai' =>$request->Phai,
                'NgaySinh' =>$request->NgaySinh,
                'NoiSinh' =>$request->NoiSinh,
                'MaKH' =>$request->MaKH,
                'HocBong' =>$request->HocBong,
                'DiemTB' =>$request->DiemTB,
            ]
            );
        return redirect('/sinhvien');
    }
    // delete -> $mamh
    public function delete($masv)
    {
        DB::table('nvksinhvien')->where('MaSV','=', $masv)->delete();
        return redirect('/sinhvien');
    }
    // Đọc chi tiết thông tin môn học theo mã môn
    public function getsinhvienById($masv)
    {
        $sinhvien = DB::table('nvksinhvien')->where('MaSV',$masv)->first();
        return view('sinhvien.detail',['sinhvien'=>$sinhvien]);
    }
}
