<?php
namespace app\console\controller;

interface secret
{
    //加密
    public function Lock();

    //解密
    public function Unlock();
}