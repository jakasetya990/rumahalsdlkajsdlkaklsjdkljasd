<?php

use Illuminate\Support\Str;

if (!function_exists('adminMenu')) {
    function adminMenu()
    {
        return array(
            [
                'text' => 'Main',
                'route' => '',
                'icon' => '',
                'sub' => array(
                    [
                        'text' => 'Sub',
                        'route' => '',
                        'icon' => ''
                    ]
                )
            ],
        );
    }
}

if (!function_exists('randomId')) {
    function randomId($length = 6)
    {
        return Str::random($length);
    }
}
