<?php
$str = 'abba';

function palendrome($string)
{
    if ($string == strrev($string)) {
        return 1;
    } else
        return 0;
}
echo palendrome($str);
