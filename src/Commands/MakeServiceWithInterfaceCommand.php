<?php

namespace Eleva\ServiceMaker\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class MakeServiceWithInterfaceCommand extends Command
{
    protected $name = 'make:full-service';
    protected $description = 'Create a new service with its interface';

    public function handle()
    {
        $name = $this->argument('name');
        
        $this->call('make:interface', ['name' => $name.'Interface']);
        $this->call('make:service', ['name' => $name]);
        
        $this->info('Service and Interface created successfully.');
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the service'],
        ];
    }
}