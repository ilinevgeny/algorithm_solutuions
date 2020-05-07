<?php

class Solution
{

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2)
    {
        $result = '';
        if (strlen($str1) < 1 || strlen($str1) > 1000 || strlen($str2) < 1 || strlen($str2) > 1000)
            return '';
        $str1Arr = str_split(strtoupper($str1));
        $str2Arr = str_split(strtoupper($str2));

        foreach($str1Arr as $char)
        {
            echo ord($char) - 64 . PHP_EOL;
        }
        $frameMatches = [];
        $countFrameInStr1 = 0;
        $str1 = strtoupper($str1);
        for ($lengthFrame = 2; $lengthFrame <= strlen($str2); $lengthFrame++) {
            $frameS = implode(array_slice($str1Arr, 0, $lengthFrame));
            $frameS2 = implode(array_slice($str2Arr, 0, $lengthFrame));
            echo  $frameS . "______" . $frameS2 . PHP_EOL;
            if($frameS == $frameS2)
            {
                $pattern = $frameS2;
            }
//            $foundMatches = substr_count($str1, $frameS);
//            if ($foundMatches >= $countFrameInStr1 && $foundMatches > 0 && substr_count($str2, $frameS) > 0) {
//                $countFrameInStr1 = substr_count($str1, $frameS);
//                $countFrameInStr2 = substr_count($str2, $frameS);
//                $frameMatches[$countFrameInStr1] = $frameS;
//                $frameMatches[$countFrameInStr2] = $frameS;
//            }
        }
        exit;
        print_r($frameMatches);
        if (count($frameMatches) > 0) {
            $str1Value = array_keys(($frameMatches))[0];
            $str2Value = array_keys(($frameMatches))[1];

            $countMatches = substr_count($str2, $frameMatches[$str1Value]) * strlen($frameMatches[$str1Value]);
            if (($str1Value * strlen($frameMatches[$str1Value])) < strlen($str1)) {
                return $result;
            } elseif ($countMatches < strlen($str2)) {
                return $result;
            } elseif ($countMatches == strlen($str2) && $countMatches == strlen($str1)) {
                for($j = 0; $j < $str1Value; $j++)
                {
                    $result .= implode($frameMatches);
                }
            } else {
                $result = implode($frameMatches);
            }
        }
        return $result;
    }
}
$str1 = "CABCAB";
$str2 = "ABC";
//$str1 = "ABCABCABC";
//$str2 = "ABCD";
//$str1 = "ABABABAB";
//$str2 = "ABABABAB";
//$str1 = "LEET";
//$str2 = "CODE";
//$str1 = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
//$str2 = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
//$str1 = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
//$str2 = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
$devStr = new Solution();
echo $devStr->gcdOfStrings($str1, $str2) . PHP_EOL;
