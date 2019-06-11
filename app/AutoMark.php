<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AutoMark extends Model
{
    protected static $tableName = 'automarks';

    public static function findByType($type){
        $automarks_response = DB::table(self::$tableName)
        ->select('mark')
        ->where('type', $type);
        
        return array($automarks_response->get('mark'))[0];
    }


    public static function getMarkById($markid){
        return DB::table(self::$tableName)->select('mark')->where('id', $markid)->pluck('mark')[0];
    }

    public static function findByNameAndType($name, $type){
        $automarks_response = DB::table(self::$tableName)
                        ->where('mark', 'like', "%$name%")
                        ->where('type', $type);
        return array($automarks_response->get('mark'))[0];
    }

    public static function getMarkModels(& $array, $autotype){
        $markModelsArray = array();
        foreach($array as $key=>$value){
            foreach($value as $mark){
                $markid = DB::table(self::$tableName)->select('id')
                    ->where('mark', $mark)
                    ->where('type', $autotype)->pluck('id');

                $markid = $markid[0];
                
               $markmodels = DB::table('markmodels')->select('model')
                    ->where("markid", $markid)->pluck('model');
                $markModelsArray[$mark] = $markmodels;
            }
        }
        $array = $markModelsArray;
    }

    public static function getIdbyNameAndType($name, $type){
        return DB::table(self::$tableName)->select('id')->where('mark', $name)
                ->where('type', $type)->pluck('id')[0];
    }

}
