<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CX;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    //
    public function create()
    {
        $services = Service::all('id', 'name');

        $data = CX::all('service_id', 'feedback');

        $arr = array();
        $final_arr = array();

        foreach ($services as $service) {

            $arr[$service->name] = [];

            foreach ($data as $feedback) {
                if ($feedback->service_id == $service->id) {
                    array_push($arr[$service->name], $feedback->feedback);
                }
            }
        }

        foreach ($arr as $key => $value) {
            $bad = 0;
            $good = 0;
            $very_good = 0;
            $excellent = 0;
            $final_arr[$key] = [];

            for ($i = 0; $i < count($value); $i++) {
                if ($value[$i] == 'good') $good++;
                elseif ($value[$i] == 'bad') $bad++;
                elseif ($value[$i] == 'very good') $very_good++;
                elseif ($value[$i] == 'excellent') $excellent++;
            }
            array_push($final_arr[$key], $bad);
            array_push($final_arr[$key], $good);
            array_push($final_arr[$key], $very_good);
            array_push($final_arr[$key], $excellent);
        }

        return view('/dashboard', compact('services', 'arr', 'final_arr'));
    }
}
