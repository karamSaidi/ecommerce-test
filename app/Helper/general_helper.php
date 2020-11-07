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
} // ./get_style_derection

if (!function_exists('get_flag_by_localization')) {
    function get_flag_by_localization($local)
    {
        $flag = '';
        switch ($local) {
            case 'en':
                $flag = 'gb';
                break;
            case 'ar':
                $flag = 'sa';
                break;
            case 'fr':
                $flag = 'fr';
                break;

            default:
                $flag = 'gb';
                break;
        }
        return $flag;
    }
}// ./get_flag_by_localization
