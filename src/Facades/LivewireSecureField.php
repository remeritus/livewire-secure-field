<?php

namespace Remeritus\LivewireSecureField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Remeritus\LivewireSecureField\LivewireSecureField
 */
class LivewireSecureField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Remeritus\LivewireSecureField\LivewireSecureField::class;
    }
}
