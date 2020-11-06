<?php

if (!function_exists('get_direction')) {
    function get_direction()
    {
        return app()->getLocale() == 'ar' ? 'rtl' : 'ltr';
    }
} // ./get_direction

if (!function_exists('get_style_derection')) {
    function get_style_derection()
    {
        return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
    }
}// ./get_style_derection
