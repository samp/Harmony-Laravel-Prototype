<?php

if (! function_exists('formatmoney')) {
    function formatmoney($money)
    {
        if(bccomp($money, 1.00, 4) != 1) {
            return substr($money, -2) . 'p';
        } else {
            return '£' . $money;
        }
    }
}

?>