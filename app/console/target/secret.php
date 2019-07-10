<?php
namespace app\console\target;

interface secret
{
    //设置密钥
    public function setKey($key);

    //获取密钥
    public function getKey();

    //加密
    public function Lock($string);

    //解密
    public function Unlock($string);
}