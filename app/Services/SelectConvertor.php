<?php // app\Services\SelectConvertor.php
 
namespace App\Services;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

 
class SelectConvertor #simple class for work with database data
{


    public static function alfabetSort( & $array )
{   
    asort( $array );
    # memory(template variable)
    $memory = NULL;
    
    $sorting = array();
    
    foreach( $array as $key=>$item )
    {
        # Получаем первую букву
        $letter = mb_substr( $item, 0, 1, 'utf-8' );
        
        # if current letter don't equal previous letter
        if( $letter != $memory )
        {
            # Set letter to memory
            $memory = $letter;
            
            # Add new array
            $sorting[$memory] = array();
        }
        
        # Add to array
        $sorting[$memory][$key] = $item;
    }
    
    # Set array
    $array = $sorting;
}

    public static function getArray( & $automarks){
        $newArray  = array();
        
        foreach($automarks as $key=>$value){
            foreach($value as $mark){
                array_push($newArray, $mark);
            }
        }

        $automarks = $newArray;
    }

}