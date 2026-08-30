---
type: "PHP Feature"
title: "$_POST"
description: "``$_POST`` is an associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types ``application/x-www-form-urlencoded`` or ``multipart/form-data``."
resource: "https://www.php.net/manual/en/reserved.variables.post.php"
tags: ["php variable", "superglobal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $_POST

``$_POST`` is an associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types ``application/x-www-form-urlencoded`` or ``multipart/form-data``.

The received values are all strings or arrays. They are strings by default, and other scalar types need a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_POST`` is a superglobal: it is always available, in every scope.

Values inside ``$_POST`` are always strings, or arrays.

```php
<?php

    // POST x=1
    $_POST['x'] === '1';
    
    // POST y=abc
    $_POST['y'] === 'abc';
    
    // POST z[]=def
    // POST z[]=ghi
    $_POST['z'] === ['def', 'ghi'];

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.post.php](https://www.php.net/manual/en/reserved.variables.post.php)

## See Also
- [How To Use The $_POST[] Variable In PHP](https://medium.com/@javasper/how-to-use-the-post-variable-in-php-d607cfc5891c)

## Related
- [$_GET](/features/$_get.md)
- [$_REQUEST](/features/$_request.md)
- [$_COOKIE](/features/$_cookie.md)
- [$_ENV](/features/$_env.md)
- [$_SERVER](/features/$_server.md)
- [Form](/features/form.md)
- [Incoming Data](/features/incoming-data.md)

