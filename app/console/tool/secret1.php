<?php
namespace app\console\tool;
use app\console\controller\secret;

class secret1 implements secret
{
    private $key;

    public function __construct()
    {
        $this -> key = config('secret1_key');
    }

    public function Lock()
    {
        // TODO: Implement Lock() method.
    }


    public function Unlock()
    {
        // TODO: Implement Unlock() method.
    }
}