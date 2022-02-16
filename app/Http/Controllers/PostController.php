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
     public function store(Request $request)
    {
        // $usertype = new usertypes();
        // dd($request);
        $input = $request['question'];
        // $input = array(1,1,2,2)
        $output = array_count_values($input);
        $max = array_keys($output, max($output));
        $usertype = $max[0];
            if ($usertype === 'A'){
                echo 'あなたはSPRINGタイプです！'.PHP_EOL;
            } elseif ($usertype === 'B'){
                echo 'あなたはSUMMERタイプです！'.PHP_EOL;
            } elseif ($usertype === 'C'){
                echo 'あなたはFALLタイプです！'.PHP_EOL;
            } else {
                echo 'あなたはWINTERタイプです！'.PHP_EOL;
            } 
        // $usertype = fill($max)->save();
        // $key_max = array_values($maxes);
        print_r($input).PHP_EOL;
        print_r($output).PHP_EOL;
        print_r($max[0]).PHP_EOL;
        // print_r($usertype).PHP_EOL;
        // return redirect('/users/questions/personalcolor',$usertype->id);
        // print_r($key_max).PHP_EOL;
        // $post=max($input);
        // dd($post);
        // return redirect('users/questions/OwnInfo' . $post->id);
        
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
    public function OwnInfo()
    {
        return view('/users/questions/OwnInfo');
    }
     public function Clothes()
    {
        return view('/users/questions/Clothes');
    }
     public function outfit()
    {
        return view('/users/outfit');
    }
}
