<?php

function shouter($str)
{
    $length = strlen($str);
    $result = '';
    $counterLimit = 10;


    if ($length > 0 && $length < 5) {
        return $str;
    } elseif ($length === 5) {
        $counter = 0;

        while ($counter != $counterLimit)
        {
            $result = "{$result}{$str}";
            $counter += 1;
        }
    } else {
        $counter = 0;
        $counterLimit = 100;

        while ($counter != $counterLimit)
        {
            $result = "{$result}{$str}";
            $counter += 1;
        }
    }

    return $result;
}
