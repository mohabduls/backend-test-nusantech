<?php
//Writen by Mohamad Abdul Sobur 23 Februari 2020 20:03
//For Back-End Test at PT Solusi Teknologi Nusantara (Nusantech)
class replacer
{
    public function r($string,$space,$integer)
    {
        $repeat = str_repeat($string,$integer);
        $repeatSpace = str_repeat($space,14);

        $a = substr_replace($repeat,$space,1,0);
        $b = substr_replace($repeat,$repeatSpace,1,13);
        $c = substr_replace($repeat,$space,-1,0);
        $x = PHP_EOL;
        for($i = 0; $i < 3; $i++)
        {
            echo $a.$x.$b.$x.$c.$x.$b.$x;
        }
        echo $a.$x.$b.$x.$c;
    }
}

?>