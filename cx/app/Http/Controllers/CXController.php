<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CXController extends Controller
{
    public function input_file(Request $request)
    {
        // dd($request->hasFile("feed_text"));
        if(file_exists($request->feed_text)){

            $file = fopen($request->file('feed_text'), "r");
            // dd($file);
            $newArray =[];
            while(($line=fgets($file))!==false) { array_push($newArray , $line); }
            // dd($newArray);
            // $data = file_get_contents($request->file('feed_text'));
            // $feed = explode(',',$data);
            for ($i=0; $i <count($newArray) ; $i++) { 
                $newArray[$i] = explode(',',$newArray[$i]); 
            }
            echo "<pre>";
            var_dump($newArray);
        }else{
            echo "file does not exist ";
        }

        // dd($feed);
    }
}
