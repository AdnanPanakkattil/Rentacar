<?php

if (!function_exists('isRtl')) {
    function isRtl()
    {
        return in_array(app()->getLocale(), ['ar', 'he', 'ur', 'fa']);
    }
}

if (!function_exists('getDirection')) {
    function getDirection()
    {
        return isRtl() ? 'rtl' : 'ltr';
    }
}

if (!function_exists('getAvailableLocales')) {
    function getAvailableLocales()
    {
        return config('app.available_locales', []);
    }
}

if (!function_exists('getCurrentLocaleData')) {
    function getCurrentLocaleData()
    {
        $locale = app()->getLocale();
        return config("app.available_locales.{$locale}");
    }
}