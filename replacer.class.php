<?php
//Writen by Mohamad Abdul Sobur 23 Februari 2020 20:03
//For Back-End Test at PT Solusi Teknologi Nusantara (Nusantech)
class replacer
{
    public function puzzle($size)
    {
        $puzle ='';
        $a =0;
        for($i=1;$i<=$size;$i++)
        {
            if($i%2==1)
            {
                $a++;
            }
            for($j=1;$j<=$size;$j++)
            {
                if($j==1 || $j==($size))
                {
                    $puzle .='@';
                }
                elseif($i%2==1)
                {
                    if(($j==2 && $a%2==1)||($j==($size-1) && $a%2==0))
                    {
                        $puzle .='&nbsp;';
                    }           
                    else
                    {
                        $puzle .='@';
                    }
                }  
                else
                {
                    $puzle .='&nbsp;';
                }
            }
            $puzle .='<br/>';
        }
        return $puzle;
    }
}

?>