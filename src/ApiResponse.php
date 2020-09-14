<?php
namespace CjsProtocol;

class ApiResponse extends CmdProtocol
{
    protected $trace_id;
    //单例
    public static function getInstance() {
        static $instance = null;
        if(is_null($instance)) {
            $instance = new static();
        }
        return $instance;
    }

}
