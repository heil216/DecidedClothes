<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\sertypes;


class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function personalcolor()
    {
        return view('/users/questions/personalcolor');
    }
     public function diagnose(Request $request)
    {
        $user = $request->user();
        $input = $request['question'];
        $output = array_count_values($input);
        $max = array_keys($output, max($output));
        $personalseason  = $max[0];
        echo "あなたは $personalseason  タイプです！！";
        $user->personalseason = $personalseason;
        $user->save();
        return redirect('/users/questions/personalcolor');
    }
    public function personalinformation()
    {
        return view('/users/questions/personalinformation');
    }
    public function profile(Request $request)
    {
        $user = $request->user();
        $user->likestyle = $_POST['likestyle'];
        $user->introduction = $_POST['introduction'];
        $user->save();
        return redirect('/users/questions/personalinformation');
    }
     public function registerclothes()
    {
        return view('/users/questions/registerclothes');
    }
    public function register(Request $request)
    {
        $clothes = $request->clothe();
        $clothes->clothes_name = $POST['clothename'];
        $clothes->clothes_thickness = $POST['clothethickness'];
        $clothes->clothes_color= $POST['clothecolor'];
        $clothes->clothes_style = $POST['clothestyle'];
        $clothes->save();
        // echo $POST;
        return redirect('/users/questions/registerclothes');
        
        // echo $clothes;
    }
     public function outfit()
    {
        return view('/users/outfit');
    }
}
