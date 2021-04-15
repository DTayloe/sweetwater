<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweetwater;

class SweetwaterController extends Controller
{
    public function index(){
        $comments = Sweetwater::all();
        
        $candy = array();
        array_push($candy, "Candy test");
        $call = array();
        $referred = array();
        $signature = array();
        $misc = array();

        // foreach ($comments as $comment) {
        //     echo $comment . '<br/>';
        // }


        return view('sweetwater', [
            'candy' => $candy,
            'call' => $call,
            'referred' => $referred,
            'signature' => $signature,
            'misc' => $misc,
        ]);
    }
}
