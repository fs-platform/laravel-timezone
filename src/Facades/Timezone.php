<?php

namespace Aron\Timezone\Facades;

use Illuminate\Support\Facades\Facade;

class Timezone extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Timezone';
    }
}
