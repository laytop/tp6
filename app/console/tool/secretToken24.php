<?php
namespace app\console\tool;
use app\console\target\secret;

/**
 * 一个小时一个token密钥，具体是那个密钥，请看密钥生成时间
 * Class secretToken24
 * @package app\console\tool
 */
class secretToken24 implements secret
{
    private $key;

    public function __construct($obj)
    {
    }

    public function setKey($key)
    {
        $this -> key = $key;
    }

    public function getKey()
    {
        return $this -> key;
    }

    public function Lock($string)
    {
        // TODO: Implement Lock() method.
    }

    public function Unlock($string)
    {
        // TODO: Implement Unlock() method.
    }
}