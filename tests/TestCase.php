<?php

namespace Crockerio\ELAP\Tests;

use Crockerio\ELAP\ELAPServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [ELAPServiceProvider::class];
    }
}
