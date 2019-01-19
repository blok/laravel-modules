<?php

namespace Blok\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Blok\Modules\Commands\CommandMakeCommand;
use Blok\Modules\Commands\ControllerMakeCommand;
use Blok\Modules\Commands\DisableCommand;
use Blok\Modules\Commands\DumpCommand;
use Blok\Modules\Commands\EnableCommand;
use Blok\Modules\Commands\EventMakeCommand;
use Blok\Modules\Commands\FactoryMakeCommand;
use Blok\Modules\Commands\InstallCommand;
use Blok\Modules\Commands\JobMakeCommand;
use Blok\Modules\Commands\ListCommand;
use Blok\Modules\Commands\LinkCommand;
use Blok\Modules\Commands\ListenerMakeCommand;
use Blok\Modules\Commands\MailMakeCommand;
use Blok\Modules\Commands\MiddlewareMakeCommand;
use Blok\Modules\Commands\MigrateCommand;
use Blok\Modules\Commands\MigrateRefreshCommand;
use Blok\Modules\Commands\MigrateResetCommand;
use Blok\Modules\Commands\MigrateRollbackCommand;
use Blok\Modules\Commands\MigrateStatusCommand;
use Blok\Modules\Commands\MigrationMakeCommand;
use Blok\Modules\Commands\ModelMakeCommand;
use Blok\Modules\Commands\ModuleMakeCommand;
use Blok\Modules\Commands\NotificationMakeCommand;
use Blok\Modules\Commands\PolicyMakeCommand;
use Blok\Modules\Commands\ProviderMakeCommand;
use Blok\Modules\Commands\PublishCommand;
use Blok\Modules\Commands\PublishConfigurationCommand;
use Blok\Modules\Commands\PublishMigrationCommand;
use Blok\Modules\Commands\PublishTranslationCommand;
use Blok\Modules\Commands\RequestMakeCommand;
use Blok\Modules\Commands\ResourceMakeCommand;
use Blok\Modules\Commands\RouteProviderMakeCommand;
use Blok\Modules\Commands\RuleMakeCommand;
use Blok\Modules\Commands\SeedCommand;
use Blok\Modules\Commands\SeedMakeCommand;
use Blok\Modules\Commands\SetupCommand;
use Blok\Modules\Commands\TestMakeCommand;
use Blok\Modules\Commands\UnUseCommand;
use Blok\Modules\Commands\UpdateCommand;
use Blok\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        LinkCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
