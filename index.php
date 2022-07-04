
<?php

$str = 'we will call you on 22.04.2022 and on 25.04.2022';

preg_match_all('/\d{2}\.\d{2}.\d{4}/', $str, $days);

$replace = [];
$finder = [];

foreach ($days as $day => $vals) {
foreach ($vals as $key => $value) {
            $finder[] = $value;
            $replace[] = $value.' '.date("D", strtotime($value));
    }
}

$str = str_replace($finder, $replace, $str);


echo str_replace($days, $new, $str);
?>