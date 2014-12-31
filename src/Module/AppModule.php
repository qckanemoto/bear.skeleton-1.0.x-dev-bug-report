<?php

namespace My\App\Module;

use BEAR\Package\AppMeta;
use BEAR\Package\PackageModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule(new AppMeta('My\App')));
    }
}
