<?php

namespace My\App\Module;

use BEAR\Package\AppMeta;
use BEAR\Package\PackageModule;
use My\App\Annotation;
use My\App\Interceptor;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule(new AppMeta('My\App')));

        $this->bindInterceptor(
            $this->matcher->any(),
            $this->matcher->annotatedWith(Annotation::class),
            [Interceptor::class]
        );
    }
}
