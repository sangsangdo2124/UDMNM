<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller{
    //function vidu1(){
        //return view('vidu1');
    //}
    
    function vidu2(){
        return view('vidu2');
        }
    
    function tinhtong(Request $request)
    {
        $so_a = $request->input("so_a");
        $so_b = $request->input("so_b");
        $ket_qua = $so_a+$so_b;
        return "Kết quả là: ".$ket_qua;
    }

<<<<<<< HEAD
    function Thoa(){
        return view('Thoa');
        }
    
    }
=======
    function vidu3(){
        return view('vidu3');
        }

    function sang(){
        return view('sang');
        }
}
>>>>>>> deb53c820bc4d072a4f2d13e7e5126c640f4a4e8





   