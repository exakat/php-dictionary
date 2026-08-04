# http_build_query()
The ``http_build_query()`` native function is used to generate a URL-encoded query string from an associative array or an object. This is commonly used to build query strings for HTTP GET requests or for use in URLs.

``http_build_query()`` converts automatically backed enumerations to their type value, integer or string, when they are used as values in the array. This is a PHP 8.4 feature.

``http_build_query()`` provides arguments to deal with numeric keys, a prefix may be added, with custom separators and encoding type. 

The reverse function for ``http_build_query()`` is ``parse_str()``, which converts a query string into an array.
```php
<?php

    enum A: int {
        case A = 1;
    }
    
    print http_build_query(['x' => A::A, 'b' => 3]);
    //    x=1&b=3

?>
```

## See Also

+ [Mastering PHP's `http_build_query()` Function for URL Manipulation](https://reintech.io/blog/mastering-php-http-build-query-function)

Related : [Enumeration (enum)](Enumeration (enum)), [Backed Enum](Backed Enum), [parse_str()](parse_str()), [Anchor](Anchor), [parse_url()](parse_url()), [Separator](Separator), [Universal Resource Locator (URL)](Universal Resource Locator (URL))
