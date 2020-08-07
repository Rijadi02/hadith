<?php
require_once("includes/init.php");
function rm($str)
{
    return str_replace(' ', '', $str);
}

function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}

$hadithet = Hadithet::find_all();

$array = ['ka thënë','tregon:','r.a. tregon:', 'r.a. tregon se' ,'r.a. tregon','a.s. tha:','a.s. ka thënë:','a.s. të thotë:'];

$i = 0;
foreach($hadithet as $hadith)
{
    if(rm($hadith->Transmetimi) != "")
    {
        // if(substr($hadith->Transmetimi, -1) != ":")
        // {
        //     $hadith->Transmetimi = $hadith->Transmetimi . ":";
            
        // }

        ?>
        <p style="color: red;"><?php echo $hadith->id ?>. <?php echo $hadith->Transmetimi ?></p>

        <p style="color: green;"><?php echo $hadith->Hadithi ?></p>

        <br>
        
        <?php
        // $h = $hadith->Hadithi;
        // foreach($array as $a)
        // {
        //     if(contains($a,$h))
        //     {
        //         $split = explode($a,$h);
        //         $split[0] .= $a;
        //         $a = $split[0];
        //         if(strlen($a) < 125)
        //         {
        //             $h = str_replace($a,'',$h);
        //             // $hadith->Hadithi = $h;
        //             // $hadith->Transmetimi = $a;
        //             // $hadith->save($hadith->id);
        //             $i ++;
        //         } 
        //     break;
        //     }
        // }
    }
}

echo $i;