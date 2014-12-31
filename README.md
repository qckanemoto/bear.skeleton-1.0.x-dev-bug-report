Only first annotated method in class is interceptable?

```php
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
```

```php
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
```

```bash
$ php bootstrap/api.php get app://self/getinterceptable
invoked

code: 200
header:
body:
{
    "_links": {
        "self": {
            "href": "/getinterceptable"
        }
    }
}

$ php bootstrap/api.php post app://self/getinterceptable
code: 200
header:
body:
{
    "_links": {
        "self": {
            "href": "/getinterceptable"
        }
    }
}

$ php bootstrap/api.php get app://self/postinterceptable
code: 200
header:
body:
{
    "_links": {
        "self": {
            "href": "/postinterceptable"
        }
    }
}

$ php bootstrap/api.php post app://self/postinterceptable
invoked

code: 200
header:
body:
{
    "_links": {
        "self": {
            "href": "/postinterceptable"
        }
    }
}
```
