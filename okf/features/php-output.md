---
type: "PHP Feature"
title: "php://output"
description: "``php://output`` is a special write-only stream that gives access to the body of the outgoing HTTP response."
resource: "https://www.php.net/manual/en/wrappers.php.php"
tags: ["http", "php stream"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# php://output

``php://output`` is a special write-only stream that gives access to the body of the outgoing HTTP response. It does not work with CLI environment.

``php://output`` is also implicitly written when using ``echo``, ``print``, the HTML mode, or ``print_r()``.

```php
<?php

    $incoming = file_put_contents('php://output', '<p>hello world</p>');

?>
```

## Documentation
- [https://www.php.net/manual/en/wrappers.php.php](https://www.php.net/manual/en/wrappers.php.php)

## See Also
- [PHP Output Buffering for dummies](https://medium.com/@eric.morand/php-output-buffering-for-dummies-fad9624554b4)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Stream](/features/stream.md)
- [Echo](/features/echo.md)
- [Print](/features/print.md)
- [php://input](/features/php-input.md)
- [file_put_contents()](/features/file_put_contents.md)
- [$HTTP_RAW_POST_DATA](/features/$HTTP_RAW_POST_DATA.md)

