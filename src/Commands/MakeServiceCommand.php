<?php

namespace Eleva\ServiceMaker\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeServiceCommand extends GeneratorCommand
{
    protected $name = 'make:service';
    protected $description = 'Create a new service class';
    protected $type = 'Service';

    protected function getStub()
    {
        return __DIR__.'/../Stubs/service.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\\'.config('service-maker.service_namespace', 'Services');
    }
}