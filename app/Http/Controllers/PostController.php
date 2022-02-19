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
    public function register(Request $request,Clothe $clothe)
    {
        $clothe = $request->clothe();
        dd($clothes);
        $clothe->clothes_name = $POST['clothename'];
        $clothe->clothes_thickness = $POST['clothethickness'];
        $clothe->clothes_color= $POST['clothecolor'];
        $clothe->clothes_style = $POST['clothestyle'];
        
        $clothes->save();
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
     public function outfit()
    {
        return view('/users/outfit');
    }
}
