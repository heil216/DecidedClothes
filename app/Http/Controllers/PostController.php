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
        // $key_max = array_values($maxes);
        // print_r($input).PHP_EOL;
        // print_r($output).PHP_EOL;
        // print_r($max[0]).PHP_EOL;
        // print_r($usertype).PHP_EOL;
        // return redirect('/users/questions/personalcolor',$usertype->id);
        // print_r($key_max).PHP_EOL;
        // $post=max($input);
        // dd($post);
        
        // $request->validate([
        // 'eye' => 'required',
        // 'hair' => 'required',
        // 'skin' => 'required',
        // 'burn' => 'required',
        // 'rip' => 'required',
        // 'goodrip' => 'required',
        // 'badrip' => 'required',
        // 'accesary' => 'required',
        // 'goodbasiccolor' => 'required',
        // 'complimentedcolor' => 'required',
        // 'firstimpression' => 'required',
        // ]);
        
        // $post->eye = $request->eye;
        // $post->hair = $request->hair;
        // $post->skin = $request->skin;
        // $post->burn = $request->burn;
        // $post->rip = $request->rip;
        // $post->goodrip = $request->goodrip;
        // $post->badrip = $request->badrip;
        // $post->accesary = $request->accesary;
        // $post->goodbasiccolor = $request->goodbasiccolor;
        // $post->complimentedcolor = $request->complimentedcolor;
        // $post->firstimpression = $request->firstimpression;
        // $post-> save();
        // return redirect()
        //     ->route('posts.step2');
    }
    public function personalinformation()
    {
        return view('/users/questions/personalinformation');
    }
    public function profile(Request $request)
    {
        dd($request);
        $user = $request->user();
        $input = $request['personalinformation'];
        $likestyle=$input[0];
        $introduction=$input[1];
        $user->likestyle = $likestyle;
        $user->introduction = $introduction;
        $user->save();
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
