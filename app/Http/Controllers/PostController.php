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
        dd($request);
        // $user = $request->user();
        // $input = $request['personalinformation'];
        // $likestyle=$input[0];
        // $introduction=$input[1];
        // $user->likestyle = $likestyle;
        // $user->introduction = $introduction;
        // $user->save();
    }
     public function RegisterClothes()
    {
        return view('/users/questions/RegisterClothes');
    }
    public function register(Request $request)
    {
        $clothes = $request->clothe();
        $input = $request['register'];
        dd($request);
    }
     public function outfit()
    {
        return view('/users/outfit');
    }
}
