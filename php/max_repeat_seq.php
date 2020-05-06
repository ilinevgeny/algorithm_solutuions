<?php
$arr = [0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 1,];

$options = getopt("h::s::", array("help::"));
$helpArr = ['h'=>'try to use [-s] params for setting sequences 0 and 1; example: -s111000'];
//print_r($options);
if(isset($options['h']) || isset($options['help']))
{
    echo array_merge($options, $helpArr)['h'] . PHP_EOL;
    exit(0);
}

if(isset($argv[1]))
{
    $arr = str_split(trim($argv[1]));
}
if(isset($options['s']))
{
    $arr = str_split(trim($options['s']));
}

$line_unit = 0;
$line_unit_counter = 0;
foreach ($arr as $key => $val) {
    if ($val == 1) {
        $line_unit_counter++;
        $line_unit = ($line_unit < $line_unit_counter) ? $line_unit_counter : $line_unit;
    } else {
        $line_unit_counter = 0;
    }
}

echo $line_unit . PHP_EOL;