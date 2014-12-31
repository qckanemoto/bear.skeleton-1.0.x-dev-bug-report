<?php
namespace My\App\Resource\App;

use BEAR\Resource\ResourceObject;
use My\App\Annotation as Intercept;

class GetInterceptable extends ResourceObject
{
    /**
     * @Intercept
     */
    public function onGet()
    {
    }

    /**
     * @Intercept
     */
    public function onPost()
    {
    }
}
