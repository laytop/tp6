<?php
namespace app\console\tool;
use app\console\target\secret;

class secretLetter implements secret
{
    //密钥
     private $Key;

    //设置密钥
     public function setKey($key)
     {
         $this->Key = $key;
     }

     //获取密钥
     public function getKey()
     {
         return $this->Key;
     }

     //加密
     public function Lock($string)
     {
         $key = $this -> Key;
         $tex = serialize($string);
         $key = $key ? $key : "test";
         $md5str=preg_replace('|[0-9/]+|','',md5($key));
         $key = substr($md5str, 0, 2);
         $texlen = strlen($tex);
         $rand_key=md5($key);
         $reslutstr = "";
         for ($i = 0; $i < $texlen; $i++) {
             $reslutstr.=$tex{$i} ^ $rand_key{$i % 32};
         }
         $reslutstr = trim(base64_encode($reslutstr), "==");
         $reslutstr = $key.substr(md5($reslutstr), 0, 3) . $reslutstr;
         return $reslutstr;
     }

     //解密
     public function Unlock($string)
     {
         $key = substr($string, 0, 2);
         $tex = substr($string, 2);
         $verity_str = substr($tex, 0, 3);
         $tex = substr($tex, 3);
         if ($verity_str != substr(md5($tex), 0, 3)) {
             //完整性验证失败
             return false;
         }
         $tex = base64_decode($tex);
         $texlen = strlen($tex);
         $reslutstr = "";
         $rand_key=md5($key);
         for($i = 0; $i < $texlen; $i++) {
             $reslutstr.=$tex{$i} ^ $rand_key{$i % 32};
         }
         return unserialize($reslutstr);
     }
}