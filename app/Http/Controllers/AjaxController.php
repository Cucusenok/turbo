<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Services\SelectConvertor;
use App\AutoMark;
use App\MarkModel;

class AjaxController extends Controller
{
    public function index(){
        $inputText = Input::get('inputtext');
        $autotype = Input::get('autotype');

        AutoMark::findByType($autotype);
        

        if(Input::get('all') == "true"){
            $automarks = AutoMark::findByType($autotype);
            $models = clone $automarks;
            $models = "none";
        }

        else{
        $automarks = AutoMark::findByNameAndType($inputText, $autotype);
        $models = MarkModel::findByName($inputText);
    }

        
    SelectConvertor::getArray($automarks);
    SelectConvertor::alfabetSort($automarks);

     Log::info($models);
     return response()->json(array('automarks'=> $automarks, 'models'=> $models), 200);
    }

    public function model(){
        $mark = Input::get('mark');
        $autotype = Input::get('autotype');
        $models = array($mark, $autotype);
        $models = MarkModel::findByNameAndMark($mark, $autotype);
        $markmodels = array();
        $markmodels[$mark] = $models;
        return response()->json(array('models'=> $markmodels), 200);
    }

    public function turbo(){
        $model = Input::get('model');
        $autotype = Input::get('autotype');
    }


}
