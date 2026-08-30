---
type: "PHP Feature"
title: "$_SERVER"
description: "The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations."
resource: "https://www.php.net/manual/en/reserved.variables.server.php"
tags: ["php variable", "superglobal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $_SERVER

The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.

The entries in this array are created by the web server, therefore there is no guarantee that every web server provides any of these.

The ``$_SERVER`` variable is an associative array where the keys are the variable names and the values are the corresponding values.

``$_SERVER`` is a superglobal: it is always available, in every scope.

```php
<?php

    echo $_SERVER['PHP_SELF'];

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.server.php](https://www.php.net/manual/en/reserved.variables.server.php)

## See Also
- [PHP Superglobals Explained, With Cheatsheet](https://code.tutsplus.com/php-superglobals-explained-with-cheatsheet--cms-36598t)
- [PHP: Superglobals - Manual](https://www.php.net/manual/en/language.variables.superglobals.php)

## Related
- [$_POST](/features/$_post.md)
- [$_GET](/features/$_get.md)
- [$_FILES](/features/$_FILES.md)
- [$_COOKIE](/features/$_cookie.md)
- [$_ENV](/features/$_env.md)
- [$GLOBALS](/features/$globals.md)
- [HTTP Request Headers](/features/http-headers.md)
- [Internet Protocol (IP)](/features/ip.md)

