<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class BillbeeSettings extends Settings
{
    public bool $enabled = false;

    public ?string $username = '';

    public ?string $password = '';

    public ?string $key = '';

    public ?string $customShopKey = '';

    public static function group(): string
    {
        return 'billbee';
    }

    public static function encrypted(): array
    {
        return [
            'username',
            'password',
            'key',
            'customShopKey',
        ];
    }
}
