<?php
if (!function_exists('php7_count')) {
    function php7_count($value) {
        if ($value === null || $value === '') {
            return 0;
        }
        if (is_array($value) || $value instanceof Countable) {
            return count($value);
        }
        return 1;
    }
}

if (!function_exists('php7_sizeof')) {
    function php7_sizeof($value) {
        return php7_count($value);
    }
}

if (!function_exists('php7_htmlentities')) {
    function php7_htmlentities($value) {
        if ($value === null) return '';
        return htmlentities($value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('php7_trim')) {
    function php7_trim($value) {
        if ($value === null) return '';
        return trim($value);
    }
}
