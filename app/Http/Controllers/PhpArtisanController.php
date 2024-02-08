<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class PhpArtisanController
{
    public function optimizeClear(): string
    {
        Artisan::call('optimize:clear');
        return 'optimize clear success';
    }

    public function cacheClear(): string
    {
        Artisan::call('cache:clear');
        return 'cache clear success';
    }

    public function configClear(): string
    {
        Artisan::call('config:clear');
        return 'config clear success';
    }

    public function storageLink(): string
    {
        Artisan::call('storage:link');
        return 'storage link success';
    }

    public function migrateFreshSeed(): string
    {
        Artisan::call('migrate:fresh --seed');
        return 'migrate fresh seed success';
    }
}
