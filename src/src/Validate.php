<?php

namespace App;

class Validate
{
    public static function email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function url($url)
    {
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }
}
