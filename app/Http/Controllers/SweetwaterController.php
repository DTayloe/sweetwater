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
        
        $candy = $this->filterSearch($comments, "candy");
        $call = $this->filterSearch($comments, "call");
        $referred = $this->filterSearch($comments, "refer");
        $signature = $this->filterSearch($comments, "signature");
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

    public function filterSearch(array $arr, string $search){
        return array_filter($arr, function($comment, $key) use($search)
        {
            if(stripos($comment, $search) === false){
                return false;
            }else{
                array_push($this->removeFromCollection, $key);
                return true;
            }
        }, ARRAY_FILTER_USE_BOTH);
    }
}
