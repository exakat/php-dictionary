---
type: "PHP Feature"
title: "$_COOKIE"
description: "The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver."
resource: "https://www.php.net/manual/en/reserved.variables.cookie.php"
tags: ["php variable", "superglobal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $_COOKIE

The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.

The ``$_COOKIE`` variable is an associative array where the keys are the cookies names and the values are the corresponding values passed in the HTTP headers. 

``$_COOKIE`` is a superglobal: it is always available, in every scope.

Values inside ``$_COOKIE`` are always strings or arrays.

```php
<?php

    echo $_COOKIE['username'];

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.cookie.php](https://www.php.net/manual/en/reserved.variables.cookie.php)

## See Also
- [PHP: setcookie - Manual](https://www.php.net/manual/en/function.setcookie.php)
- [PHP Cookies - PHP Tutorial](https://www.phptutorial.net/php-tutorial/php-cookies/)

## Related
- [$_GET](/features/$_get.md)
- [$_POST](/features/$_post.md)
- [$_REQUEST](/features/$_request.md)
- [$_SERVER](/features/$_server.md)
- [$_FILES](/features/$_FILES.md)
- [$_ENV](/features/$_env.md)

