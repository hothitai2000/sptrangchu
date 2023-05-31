<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Input,File;
use Request;
use App\Http\Requests\SigupRequest;
class SigupController extends Controller{
    public function index(){
        return view('sigup');
    }
    public function displayInfor(sigupRequest $Requests)
    {
        $user=[
            'name'=>$name=$Request->input("name"),
            'age'=>$age=$Request->input("age"),
            'date'=>$date=$Request->input("date"),
            'phone'=>$phone=$Request->input("phone"),
            'web'=>$web=$Request->input("web"),
            'address'=>$address=$Request->input("web"),
        ];
        return View('sigup')->with('user',$user);
    }
}

?>
