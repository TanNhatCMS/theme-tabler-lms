<?php

namespace TanNhatCMS\ThemeTablerLMS;

use Backpack\CRUD\ThemeServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected string $vendorName = 'tannhatcms';
    protected string $packageName = 'theme-tabler-lms';

    public function boot(): void
    {
        $this->autoboot();

        $this->app->afterResolving(BladeCompiler::class, function () {
            Blade::componentNamespace('TanNhatCMS\\ThemeTablerLMS\\View\\Components', $this->packageName);
        });
        
    }
}
