<?php
namespace My\App;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class Interceptor implements MethodInterceptor
{
    public function invoke(MethodInvocation $invocation)
    {
        echo 'invoked' . PHP_EOL .PHP_EOL;

        return $invocation->proceed();
    }
}
