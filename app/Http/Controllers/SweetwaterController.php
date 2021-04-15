<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweetwater;
use Illuminate\Support\Facades\Log;

class SweetwaterController extends Controller
{
    public function index(){
        $entireTable = Sweetwater::all();
        $comments = $entireTable->pluck('comments')->all();
        
        $candy = array();
        $candy = array_filter($comments, function($comment)
        {
            if(stripos($comment, "candy") === false){
                return false;
            }else{
                return true;
            }
        });
        
        $call = array();
        $referred = array();
        $signature = array();
        $misc = array();

        return view('sweetwater', [
            'all' => $comments,
            'candy' => $candy,
            'call' => $call,
            'referred' => $referred,
            'signature' => $signature,
            'misc' => $misc,
        ]);
    }
}
