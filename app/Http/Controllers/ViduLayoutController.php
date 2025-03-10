<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class ViduLayoutController extends Controller
{
    function sach()
    {
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        return view("vidusach.index", compact("data"));
    }
    
    function theloai($id)
    {
        $data = DB::select("select * from sach where id_the_loai = ?",[$id]);
        return view("vidusach.index", compact("data"));
    }

    function chitietsach($id)
    {
        $sach = DB::table('sach')->where('id', $id)->first(); // Lấy chi tiết sách theo id
        return view("vidusach.chi_tiet", compact('sach'));
    }
}