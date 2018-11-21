<?php

namespace BaiduBceSupport;

use Illuminate\Support\ServiceProvider;

class BaiduBceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__ . '/BaiduBce.phar';
    }
}
