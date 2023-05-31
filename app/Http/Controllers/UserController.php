<?php

namespace App\Http\Controllers;//noi luu tru
use App\Http\Controllers\Controller;// khai bao thu vien
use Illuminate\Http\Request;


class UserController extends Controller
{
    // public function xinchao(){
    //     echo "xin chao Tai xoan";
    // }
    public function getIndex()
    {
        $name='Phuong Tai';
        $age=32;
        $class='PNV24A';
        $arr=['name'->$name,'age'->$age,'class'->$class];
        return view('')->wwith('student','arr');
    }
}

//         { public function index()
//             {
            
       
//          $title="Day la tieu de";
//         $decription="Xinh dep";
//         return view('test')->with('title',$title);
//     }
// }
