<?php

namespace LowB\LadminSimpleTheme\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use LowB\LadminSimpleTheme\LadminSimpleThemeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'LowB\\LadminSimpleTheme\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LadminSimpleThemeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ladmin-simple-theme_table.php.stub';
        $migration->up();
        */
    }
}
