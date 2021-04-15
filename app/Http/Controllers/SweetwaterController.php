<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweetwater;
use Illuminate\Support\Facades\Log;

class SweetwaterController extends Controller
{
    public $removeFromCollection;

    function __construct(){
        $this->removeFromCollection = array();
    }

    public function index(){
        $entireTable = Sweetwater::all();
        $comments = $entireTable->pluck('comments')->all();
        
        $candy = array();
        $candy = array_filter($comments, function($comment, $key)
        {
            if(stripos($comment, "candy") === false){
                return false;
            }else{
                array_push($this->removeFromCollection, $key);
                return true;
            }
        }, ARRAY_FILTER_USE_BOTH);
        
        $call = array();
        $referred = array();
        $signature = array();
        $misc = array();
        $misc = array_diff_key($comments, $this->removeFromCollection);

        return view('sweetwater', [
            'all' => $comments,
            'remove' => $this->removeFromCollection,
            'candy' => $candy,
            'call' => $call,
            'referred' => $referred,
            'signature' => $signature,
            'misc' => $misc,
        ]);
    }
}
