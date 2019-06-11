<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Services\SelectConvertor;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $models = array( DB::table('automarks')
                    ->select("mark")
                    ->where("type", "ligth")
                    ->get('mark') )[0];
        SelectConvertor::getArray($models);
        SelectConvertor::alfabetSort($models);
        
        return view('home', ['models'=>$models] );
    }
}
