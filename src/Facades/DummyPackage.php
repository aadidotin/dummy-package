<?php

namespace Apack\DummyPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apack\DummyPackage\DummyPackage
 */
class DummyPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Apack\DummyPackage\DummyPackage::class;
    }
}
