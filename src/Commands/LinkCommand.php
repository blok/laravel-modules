<?php

namespace Blok\Modules\Commands;

use Illuminate\Console\Command;
use Blok\Modules\Module;
use Blok\Modules\Publishing\AssetPublisher;
use Symfony\Component\Console\Input\InputArgument;

class LinkCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Link a module\'s assets to the public folder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($name = $this->argument('module')) {
            $this->link($name);
            return;
        }
    }

    /**
     * Publish assets from the specified module.
     *
     * @param string $name
     */
    public function link($name)
    {
        \File::makeDirectory(public_path('modules'), 493, true, true);

        $ucfirstname = ucfirst($name);

        $this->laravel->make('files')->link(
            realpath(__DIR__.'/../../../../../Modules/'.$ucfirstname.'/Assets'), public_path('modules/'.$name)
        );

        $this->info('The [/Modules/'.$ucfirstname.'/Assets] directory has been linked to public/modules/'.$name);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['module', InputArgument::REQUIRED, 'The name of the module to be publicly linked'],
        ];
    }
}
