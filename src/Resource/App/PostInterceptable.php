<?php
namespace My\App\Resource\App;

use BEAR\Resource\ResourceObject;
use My\App\Annotation as Intercept;

class PostInterceptable extends ResourceObject
{
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
