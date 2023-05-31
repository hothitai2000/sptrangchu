<?php
namespace App\Http\Controllers;
use App\Models\Blog;
class Demo extends Controller
{
    public function Demo()
    {
        $data=Blog::getData();
        return view('Hồ Thị Phương Tài',compact('data'));
    }
    public function about()
    {
        return view('about');
    }
}

?>