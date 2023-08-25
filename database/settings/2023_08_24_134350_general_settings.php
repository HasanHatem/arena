<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.name', 'Arena');
        $this->migrator->add('general.email', 'arena@arena.com');
        $this->migrator->add('general.mobile_number', '+971 12 345 6789');
        $this->migrator->add('general.logo', 'uploads/images/logo.png');
    }
};
