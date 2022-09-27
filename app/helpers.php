<?php

if (! function_exists('formatmoney')) {
    function formatmoney($money)
    {
        if ($money == 0.0)
        {
            return "£0.00";
        }

        if ($money < 1) {
            return substr($money, -2) . 'p';
        } else {
            return '£' . $money;
        }
    }
}

?>
