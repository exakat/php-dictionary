---
type: "PHP Feature"
title: "php://input"
description: "``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request."
resource: "https://www.php.net/manual/en/wrappers.php.php"
tags: ["http", "php stream"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# php://input

``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request. It does not work with CLI environment.

When a browser sends data to the web server, PHP parses it into superglobals like ``$_POST``. But sometimes the exact raw payload is needed: that's where ``php://input`` comes in.

The raw data used to be accessed via ``$HTTP_RAW_POST_DATA``, but this is a deprecated feature.

```php
<?php

    $incoming = file_get_contents('php://input');

?>
```

## Documentation
- [https://www.php.net/manual/en/wrappers.php.php](https://www.php.net/manual/en/wrappers.php.php)

## See Also
- [How to receive JSON POST with PHP ?](https://www.geeksforgeeks.org/php/how-to-receive-json-post-with-php/)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Stream](/features/stream.md)
- [file_get_contents()](/features/file_get_contents.md)
- [$HTTP_RAW_POST_DATA](/features/$HTTP_RAW_POST_DATA.md)
- [php://output](/features/php-output.md)

