<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\ClothesRequest;
use Illuminate\Http\Request;
use App\sertypes;
use App\Clothescolor;
use App\Clothe;
use App\Models\FileImage;
use Storage;


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
     public function diagnose(UserRequest $request)
    {
        $user = $request->user();
        $input = $request['question'];
        $output = array_count_values($input);
        $max = array_keys($output, max($output));
        $personalseason  = $max[0];
        // echo "あなたは $personalseason  タイプです！！";
        $user->personalseason = $personalseason;
        $user->save();
        return redirect('/');
    }
    public function personalinformation()
    {
        return view('/users/questions/personalinformation');
    }
    public function profile(UserRequest $request)
    {
        $user = $request->user();
        $user->likestyle = $_POST['likestyle'];
        $user->introduction = $_POST['introduction'];
        $user->save();
        return redirect('/');
    }
     public function registerclothes(Request $request)
    {
        $clothescolors = $this->clothescolor->get();
        return view('/users/questions/registerclothes', compact('clothescolors'));
        // return view('/users/questions/registerclothes');
         // データベースからfile_imagesテーブルにある全データを抽出
    }
    public function add(ClothesRequest $request)
    {
        // dd($request);
        $clothes = new Clothe;
        $input = $request["clothes"];
        $image = $request->file('image');
        // $form = $request->all();
        // logger($input);
        // logger($input['style']);
        // dd($input);
        // $clothes->fill($input)->save();
        // dd($clothe);
        // dd($image);
        $path = Storage::disk('s3')->putFile('clothes-img/', $image, 'public');
        $clothes->image_path = Storage::disk('s3')->url($path);
        $clothes->name = $input['name'];
        $clothes->thickness= $input['thickness'];
        $clothes->style= $input['style'];
        $clothes->color= $input['color'];
        $clothes->type= $input['type'];
        $clothes->where_buy= $input['where_buy'];
        
        // if($request->image){

        //     if($request->image->extension() == 'gif' || $request->image->extension() == 'jpeg' || $request->image->extension() == 'jpg' || $request->image->extension() == 'png'){
        //     $clothes=$request->file('image')->storeAs('public/image', $clothes->id.'.'.$request->image->extension());
        //     }
        
        $clothes->save();

        return redirect('/users/questions/registerclothes');
        
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
     public function result()
    {
        return view('/users/result');
    }
     public function lookhome()
    {
        return view('/look/home');
    }
    public function list(Clothe $clothe)
    {
        $clothes = Clothe::all();
        return view('/users/list', ['clothes' => $clothes])->with(['clothes' => $clothe->getPaginateByLimit()]);
    }
}
