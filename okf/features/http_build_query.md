---
type: "PHP Feature"
title: "http_build_query()"
description: "The ``http_build_query()`` native function is used to generate a URL-encoded query string from an associative array or an object."
resource: "https://www.php.net/manual/en/function.http-build-query.php"
tags: ["native function", "http"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.http-build-query.php](https://www.php.net/manual/en/function.http-build-query.php)

## See Also
- [Mastering PHP's `http_build_query()` Function for URL Manipulation](https://reintech.io/blog/mastering-php-http-build-query-function)

## Related
- [Enumeration (enum)](/features/enum.md)
- [Backed Enum](/features/backed-enum.md)
- [parse_str()](/features/parse_str.md)
- [Anchor](/features/anchor.md)
- [parse_url()](/features/parse_url.md)
- [Separator](/features/separator.md)
- [Universal Resource Locator (URL)](/features/url.md)

