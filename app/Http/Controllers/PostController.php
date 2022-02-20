<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\sertypes;
use App\Clothescolor;
use App\Clothe;
use App\Models\FileImage;



class PostController extends Controller
{
    public function __construct()
    {
        $this->clothescolor = new Clothescolor();
    //     $clothescolors = $this->clothescolor->get();
    }
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
        // echo "あなたは $personalseason  タイプです！！";
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
     public function registerclothes(Request $request,FileImage $data)
    {
        $clothescolors = $this->clothescolor->get();
        return view('/users/questions/registerclothes', compact('clothescolors'));
        // return view('/users/questions/registerclothes');
         // データベースからfile_imagesテーブルにある全データを抽出
    }
    public function add(Request $request,Clothe $clothe)
    {
        // dd($request);
        $clothe = $request->Clothe();
        dd($clothe);
        
        // $clothe->clothes_name = $POST['clothename'];
        // $clothe->clothes_thickness = $POST['clothethickness'];
        // $clothe->clothes_color= $POST['clothecolor'];
        // $clothe->clothes_style = $POST['clothestyle'];
        
        // $clothes->save();
        // $input = $request['post'];
        // $post->fill($input)->save();
        // return redirect('/posts/' . $post->id);
        
        // $data = FileImage::all();
        // // ビューfile.blade.phpに$dataを渡して表示させる
        // return view('file', compact('data'));
        // $path = $request->img->store('public/images');
        // // パスから、最後の「ファイル名.拡張子」の部分だけ取得します 例)sample.jpg
        // $filename = basename($path);
        // // FileImageをインスタンス化(実体化)します
        // $data = new FileImage;
        // // 登録する項目に必要な値を代入します
        // $data->file_name = $filename;
        // // データベースに保存します
        // $data->save();
       
    }
     public function outfit()
    {
        return view('/users/outfit');
    }
}
