<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /*function laythongtintheloai(){
        $the_loai_sach = DB::table("the_loai")->get();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }
    function laythongtinsach(){
        $sach = DB::table("sach")->select("tieu_de","tac_gia")
                    ->where("nha_xuat_ban","Văn Học")->get();
        
         return view("qlsach.thong_tin_sach",compact("sach"));        
    }
    function themtheloai(){
        $data = ["id"=>4,"ten_the_loai"=>"Trinh thám"];
        DB::table("the_loai")->insert($data);
        return "Thêm thể loại thành công!";
    }*/
    

    function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }
    function laythongtinsach()
    {
        $sach = Book::where("nha_xuat_ban","Văn Học")->get(); 
        return view("qlsach.thong_tin_sach",compact("sach"));        
    }

    function addtheloai(){
        return view("qlsach.add_the_loai");
    }
    
    function add_tl(Request $request)
    {
                $data = [
                    'id'=> $request->input('id'),
                    'ten_the_loai'=> $request->input('ten_the_loai')
                ];
            Category::create($data);
        return redirect()->back()->with('success', 'Thêm thể loại thành công!');
    }
}
