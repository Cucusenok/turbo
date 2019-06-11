<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\AutoMark;

class MarkModel extends Model
{
    protected static $tableName = "markmodels";

    public static function findByName($name){
        /*
        $markid_response = DB::table(self::$tableName)
            ->select('markid')->distinct('model')
            ->where('model', 'like', '%$name%')->pluck('model', 'markid'); 

            */
        
        $query = "SELECT DISTINCT(model), markid FROM `markmodels` WHERE model LIKE '%$name%' ORDER BY markid";
        $markid_response = DB::select($query);
        //var_dump($markid_response);
        Log::info($name);
        Log::info($query);
        $currentID = -1;
        $resultArray = array();
        $modelArray = array();
        $mark = "Empty";
        foreach($markid_response as $item){
            if($currentID != $item->markid){
                if(!empty($modelArray)){
                    $resultArray[$mark] = $modelArray;
                    $modelArray = array();
                }
                $mark = AutoMark::getMarkById($item->markid);
                array_push($modelArray, $item->model);
                $currentID = $item->markid;
                }
            else{        
                array_push($modelArray, $item->model);
            }
        }
        return $resultArray;
        
        
    }

    public static function findByNameAndMark($name, $type){
        $markid =  AutoMark::getIdbyNameAndType($name, $type);
        return self::findByMarkId($markid);
    }

    public static function findByMarkId($id){
        return DB::table(self::$tableName)->select('model')->where('markid', $id)->pluck('model');
    }

    public static function findIdByName($name){
        Log::info(   DB::table(self::table)->select('')   );
    }
}
