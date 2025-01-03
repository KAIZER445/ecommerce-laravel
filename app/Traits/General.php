<?php

namespace App\Traits;

trait General
{
    public $data = [];

    public function data($key, $value=''){
        if(empty($key)){
            return new Exception("key is required");
        }
        
        return $this->data[$key] = $value;
    }
}
