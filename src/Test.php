<?php
namespace Zdeshniy;

class Test{
    public function testo(){
        return 'all ok! ';
    }
    
    public function automate($str){
        
        try{
        
            if(!preg_match('/^[\(\)\\s\\n\\t\\r]*$/i', $str))
                throw new \InvalidArgumentException("Неверная строка!");
        
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        
        return true;
    }
}