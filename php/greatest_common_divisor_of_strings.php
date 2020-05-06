<?php
class Solution
{

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    //take char-frame from 2 units by for
    //match frame in str2 by for
    //increase frame + 1
    function gcdOfStrings($str1, $str2)
    {
        if (strlen($str1) < 1 || strlen($str1) > 1000 || strlen($str2) < 1 || strlen($str2) > 1000)
            return '' . PHP_EOL;
        $str1Arr = str_split($str1);
//        for($j = 0; $j < count($str1Arr); $j++)
//        {
//           $someArr[$str1Arr[$j]] = $j * 2;
//        }
//        print_r($someArr); exit;

        $result = '';
        $frameMatches = [];
        for($lengthFrame = 2; $lengthFrame < strlen($str1); $lengthFrame++)
        {
            for($i = 0; $i + $lengthFrame < strlen($str1); $i++)
            {
                $frame = implode(array_slice($str1Arr, $i, $lengthFrame)); //this applying until count strlen(str1) i.e dynamically
                //echo $frame . PHP_EOL;
                //start divide string: take first frame and divide both string

                if (strpos($str2, $frame) !== false)
                {
                    //echo "Founded " . $frame . PHP_EOL;

                    if(strlen($frame) > 1)
                    {
                       // echo substr_count($str2, $frame) . PHP_EOL;
                        //echo substr_count($str1, $frame) . PHP_EOL;
                        $frameMatches[$frame] = $frame;
                    }
                }
            }
        }
        print_r($frameMatches);
        /*       foreach ($str1Arr as $key => $char) {
                   $result .= $char;
                   echo "char is " . $result . PHP_EOL;
       //            if(substr_count($str2, $result) > 1) {
       //                return $result;
       //            }
                   if (strpos($str2, $result) === false) {
                       if(strlen($result) >= strlen($str1))
                       {
                           $result = substr($result, 0, -1);
                           break;
                       }
                       else {
                           //$result = '';
                       }
                   }
               }*/

        return $result;
    }
}

//$str1 = "ABCABCABC";
$str1 = "ABABAB";
$str2 = "ABC";
$str2 = "ABAB";
//$str1 = "LEET";
//$str2 = "CODE";
$devStr = new Solution();

echo $devStr->gcdOfStrings($str1, $str2) . PHP_EOL;
