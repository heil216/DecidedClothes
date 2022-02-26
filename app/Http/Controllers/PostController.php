<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeasonRequest;
use App\Http\Requests\MyProfileRequest;
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
     public function diagnose(SeasonRequest $request)
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
    public function profile(MyProfileRequest $request)
    {
        $user = $request->user();
        $image = $request->file('icon');
        $path = Storage::disk('s3')->putFile('users-img/', $image, 'public');
        $user->icon_path = Storage::disk('s3')->url($path);
        $user->likestyle = $_POST['likestyle'];
        $user->introduction = $_POST['introduction'];
        $user->save();
        return redirect('/');
    }
    public function todaymood()
    {
        return view("/users/questions/today'smood");
    }
    public function coordinate(Request $request)
    {
        $mood = $request['mood'];
        // dd($mood);
        return view('/users/result');
    }
     public function registerclothes(Request $request)
    {
        $clothescolors = $this->clothescolor->get();
        return view('/users/questions/registerclothes', compact('clothescolors'));
    }
    public function add(ClothesRequest $request)
    {
        $clothes = new Clothe;
        $input = $request["clothes"];
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('clothes-img/', $image, 'public');
        $clothes->image_path = Storage::disk('s3')->url($path);
        $clothes->name = $input['name'];
        $clothes->thickness= $input['thickness'];
        $clothes->style= $input['style'];
        $clothes->color= $input['color'];
        $clothes->type= $input['type'];
        $clothes->where_buy= $input['where_buy'];
        
        $clothes->save();

        return redirect('/users/questions/registerclothes');
       
    }
    //  public function result()
    // {
    //     return view('/users/result');
    // }
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
