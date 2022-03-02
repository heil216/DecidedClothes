<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeasonRequest;
use App\Http\Requests\MyProfileRequest;
use App\Http\Requests\ClothesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\sertypes;
use App\Clothescolor;
use App\Clothe;
use App\User;
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
        
        // if($personalseason === 'SUMER'){
        //     $personalseason = 1
        // }
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
        $path = Storage::disk('s3')->putFile('icon-img', $image, 'public');
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
    public function add(ClothesRequest $request,Clothe $clothe,User $user)
    {
        $clothe = new Clothe;
        $input = $request["clothes"];
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('clothes-img', $image, 'public');
        $clothe->image_path = Storage::disk('s3')->url($path);
        $clothe->season_type= $input['season_type'];
        $clothe->style= $input['style'];
        $clothe->category= $input['category'];
        $clothe->color= $input['color'];
        $clothe->type= $input['type'];
        $clothe->brand_name= $input['brand_name'];
        // dd($clothe);
        $clothe->save();
        
        // $clothe = App\Clothe::find(1);

        // foreach ($clothes->users as $user) {
        //         $users = App\Clothe::find(1)->users()->orderBy('updated_at', 'DESC')->get();
        // }
        
        // dd($user);
        $user_id = Auth::id();
        // dd($user_id);
        $clothe->users()->attach($user_id); 

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
        // $clothes = Clothe::all();
        return view('/users/clothes/list', )->with(['clothes' => $clothe->getPaginateByLimit()]);
    }
    public function show(Clothe $clothe)
    {
        // $clothes = new Clothe;
        return view('/users/clothes/show')->with(['clothe' => $clothe]);
    }
    public function delete(Clothe $clothe)
    {
        $clothe->delete();
        return redirect('/users/clothes/list');
        
    }
}
