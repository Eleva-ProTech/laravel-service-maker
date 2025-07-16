<?php

namespace Eleva\ServiceMaker\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeInterfaceCommand extends GeneratorCommand
{
    protected $name = 'make:interface';
    protected $description = 'Create a new interface';
    protected $type = 'Interface';

    protected function getStub()
    {
        return __DIR__.'/../Stubs/interface.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\\'.config('service-maker.interface_namespace', 'Interfaces');
    }
}