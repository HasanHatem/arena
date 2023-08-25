<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $name;
    public string $email;
    public string $mobile_number;
    public string $logo;

    public static function group(): string
    {
        return 'general';
    }
}
