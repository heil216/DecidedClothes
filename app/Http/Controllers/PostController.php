<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeasonRequest;
use App\Http\Requests\MyProfileRequest;
use App\Http\Requests\ClothesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
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
        // dd($personalseason);
        // echo "あなたは $personalseason  タイプです！！";
        
        if ($personalseason === 'Spring') {
            $personalcolor = ['ORANGE','YELLOW','RED','PINK','WHITE','NABY'];
        } elseif ($personalseason === 'Summer') {
            $personalcolor = ['パープル','水色','グリーン','グレー','ホワイト','ネイビー'];
        } elseif ($personalseason === 'Autumn') {
            $personalcolor = ['イエロー','ベージュ','レッド','ブラウン','カーキ'];
        } else {
            $personalcolor = ['グリーン','グレー','ブラック','ピンク','ホワイト','ネイビー','ブルー'];
        }
        $user->personalcolor = $personalcolor;
        // dd($user);
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
        $user->likestyle = $_POST['gender'];
        $user->introduction = $_POST['introduction'];
        $user->save();
        return redirect('/');
    }
    public function todaymood()
    {
        return view("/users/questions/today'smood");
    }
    public function coordinate(Request $request,User $user)
    {
        $cityName = 'Tokyo';
        $apiKey = '10ce5de76e295447fba694a2167d4bc6';
        $url = "api.openweathermap.org/data/2.5/weather?lat=35.652832&lon=139.839478&appid=$apiKey";
       
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);
        // $weather=JSON.parse(response.getContentText());
        $main = $data['main'];
        $temp = ($main['temp']-273.15);
        
        // return response()->json($data);
        $mood = $request['mood'];
        
        $user = Auth::user();
        $personalcolor = $user['personalcolor'];
        dd($personalcolor);
        $user_id = Auth::id();
        $clothes = User::find($user_id)->clothe;
        $number = $clothes['0'];
        $clothecolor = $number['color'];
        dd($clothecolor);
        $key = array_search($clothecolor, $personalcolor);
        dd($key);
        // if($mood === "カジュアル") {
        //     if($)
        //         if($temp >=26 ){
                    
        //         }
        //         elseif(26>$temp>15){
                    
        //         }
        //         else {
                    
        //         }
        // }
        // else {
        //         if($temp >=26 ){
                    
        //         }
        //         elseif(26>$temp>15){
                    
        //         }
        //         else {
                    
        //         }
        // }
        // dd($clothes);
        return view('/users/clothes/result');
    }
     public function lookhome()
    {
        return view('/look/home');
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
        $user_id = Auth::id();
        $clothe->user_id=$user_id;
        // dd($clothe);
        $clothe->save();
        $clothe->users()->attach($user_id); 
        
        // $clothe = App\Clothe::find(1);

        // foreach ($clothes->users as $user) {
        //         $users = App\Clothe::find(1)->users()->orderBy('updated_at', 'DESC')->get();
        // }
        
        // dd($user);
        // dd($user_id);

        return redirect('/users/questions/registerclothes');
       
    }
    //  public function result()
    // {
    //     return view('/users/result');
    // }
    public function list(Clothe $clothe)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        // dd($clothe);
        // $clothe->user_id=Auth::id();
        // $user = Auth::id();
        // $user = User::with('clothes')->get();
        // dd($user_id);
        // $user -> clothes();
        // $clothe = Clothe::find(1);
        // $clothe -> users();
        return view('/users/clothes/list' )->with(['clothes' => $user->getPaginateByClothe()]);
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
