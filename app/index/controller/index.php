<?php
namespace app\index\controller;
use app\console\tool\secretToken24;

class index
{
    public function index()
    {
        echo "你好，金权";
    }

    public function demo()
    {
//        $token = new secretToken24();
//        dump($token -> getKey());
    }
}