<?php

namespace Crockerio\ELAP\Tests;

use Crockerio\ELAP\ELAPServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function getEnvironmentSetUp($app)
    {
        include_once __DIR__.'/create_users_table.php';

        (new CreateUsersTable())->up();
    }

    protected function getPackageProviders($app)
    {
        return [ELAPServiceProvider::class];
    }
}
