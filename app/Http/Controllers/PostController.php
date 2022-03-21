<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeasonRequest;
use App\Http\Requests\MyProfileRequest;
use App\Http\Requests\ClothesRequest;
use DB;
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
            $personalcolor = "ORANGE,YELLOW,RED,PINK,WHITE,NABY";
        } elseif ($personalseason === 'Summer') {
            $personalcolor = "PURPLE,LIGHT BLUE,GREEN,GRAY,WHITE,NAVY";
        } elseif ($personalseason === 'Autumn') {
            $personalcolor = "YELLOW,BEIGE,RED,BROWN,KHAKI";
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
        // dd($temp);

        $mood = $request['mood'];
        // dd($request['mood']);
        
        $user = Auth::user();
        $personalcolors = $user['personalcolor'];
        $personalcolors = explode(',',$personalcolors);

        if($temp>=25){
            $seasontype = '夏' ;
        } elseif (16 > $temp) {
            $seasontype = '冬' ;
        } else {
            $seasontype = '春・秋' ;
        }
        
        $clothe_tops = DB::table('clothes')->where('category','top')
                                           ->where('season_type',$seasontype)
                                           ->where('style',$mood)
                                           ->whereIn('color',$personalcolors)
                                           ->get();
        $clothe_bottoms = DB::table('clothes')->where('category','bottom')
                                              ->where('season_type',$seasontype)
                                              ->where('style',$mood)
                                              ->whereIn('color',$personalcolors)
                                              ->get();
        $clothe_shoes = DB::table('clothes')->where('category','shoe')
                                            ->where('season_type',$seasontype)
                                            ->where('style',$mood)
                                            ->whereIn('color',$personalcolors)
                                            ->get();
        // dd($clothe_tops);
        // $clothe = $clothe['0'];
        if(count($clothe_tops)>0){
            $clothe_top = $clothe_tops[random_int(0, count($clothe_tops)-1)];
        } else {
            $clothe_top = "";
        }
        if(count($clothe_bottoms)>0){
            $clothe_bottom = $clothe_bottoms[random_int(0, count($clothe_bottoms)-1)];
        } else {
            $clothe_bottom = "";
        }
        if(count($clothe_shoes)>0){
            $clothe_shoe = $clothe_shoes[random_int(0, count($clothe_shoes)-1)];
        } else {
            $clothe_shoe = "";
        }
        return view('/users/clothes/result')->with(['clothe_top' => $clothe_top,'clothe_bottom' => $clothe_bottom,'clothe_shoe' => $clothe_shoe,'mood'=>$mood]);
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
        
        return redirect('/users/questions/registerclothes');
       
    }
    public function mylist()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        // dd($user);
        return view('/users/clothes/mylist' )->with(['clothes' => $user->getPaginateByClothe()]);
    }
    public function otherslist()
    {
        // $user_id = User::pluck('id');
        
        $my_id = Auth::id();
        // $otherusers = DB::table('users')->where('id','<>',$my_id)
        //                                 ->pluck('id');
        $clothes = DB::table('clothes')->where('user_id','<>',$my_id)->get();
        // dd($clothes);
        // $otherusers = User::where('id','!=',$my_id)->get();
        // $user = User::get();
        // dd($user);
        // if($user_id === $my_id) {
            //ここでfor文使う？others as other
        // } else {
        // $user = User::find($otheruser);
        // }
        // dd($otherusers);
        return view('/users/clothes/otherslist' )->with(['clothes' => $clothes]);
    }
    public function show(Clothe $clothe)
    {
        return view('/users/clothes/show')->with(['clothe' => $clothe]);
    }
    public function delete(Clothe $clothe)
    {
        $clothe->delete();
        return redirect('/users/clothes/list');
    }
}
