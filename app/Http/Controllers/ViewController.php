<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }
    function showDictionary() {
        //source untuk data / proses bisnis yg di olah
        return view('dictionary') ;
    }
    function answer(Request $request) {
        //source untuk data / proses bisnis yg di olah
        return view('hasilDictionary') ;
    }


}
