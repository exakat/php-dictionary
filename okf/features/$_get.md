---
type: "PHP Feature"
title: "$_GET"
description: "The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters."
resource: "https://www.php.net/manual/en/reserved.variables.get.php"
tags: ["php variable", "superglobal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $_GET

The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters. When a user submits a form using the HTTP GET method or includes parameters in the URL, PHP populates the ``$_GET`` variable with key-value pairs representing those parameters.

The ``$_GET`` variable is an associative array where the keys are the parameter names and the values are the corresponding values passed in the URL. 

The received values are strings or arrays. They are strings by default, and other scalar types need to be cast to have the correct type. The values are arrays when the URL uses the ``[]`` format: that format handles arrays and maps.

``$_GET`` is a superglobal, or auto-global: it is always available, in every scope.

Values inside ``$_GET`` are always strings, or arrays. ``https://www.site.com/index.php?x=1`` or ``https://www.site.com/index.php?x[2]=1``.

```php
<?php

    // https://www.example.com/index.php?x=1
    $_GET['x'] === '1';
    
    // https://www.example.com/index.php?y=abc
    $_GET['y'] === 'abc';
    
    // https://www.example.com/index.php?z[]=def&z[][]=ghi
    $_GET['z'] === ['def', ['ghi']];

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.get.php](https://www.php.net/manual/en/reserved.variables.get.php)

## See Also
- [$_GET in PHP](https://oregoom.com/en/php/get/)

## Related
- [$_POST](/features/$_post.md)
- [$_REQUEST](/features/$_request.md)
- [$_FILES](/features/$_FILES.md)
- [$_SERVER](/features/$_server.md)
- [$_COOKIE](/features/$_cookie.md)
- [$_ENV](/features/$_env.md)
- [Form](/features/form.md)
- [Incoming Data](/features/incoming-data.md)
- [Query String](/features/query-string.md)

