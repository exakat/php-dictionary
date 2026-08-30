---
type: "exception"
title: "PDOException"
description: "``PDOException`` represents an error raised by PDO."
resource: "https://www.php.net/manual/en/class.pdoexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PDOException

``PDOException`` represents an error raised by PDO. It is recommended to never throw a ``PDOException`` from custom code, and only catch such exception, emitted directly by the PHP engine.

```php
<?php

    try {
      $pdo = new PDO('sqlite:myfile.sqlite');
    } catch(PDOException $e) {
        die('Unable to open database connection');
    } 

?>
```

## Documentation
- [https://www.php.net/manual/en/class.pdoexception.php](https://www.php.net/manual/en/class.pdoexception.php)

## See Also
- [How to Handle PDOException in PHP | Rollbar](https://rollbar.com/blog/php-pdoexception/)
- [How to Handle Errors in PHP PDO with Examples](https://www.plus2net.com/php_tutorial/pdo-error.php)

## Related
- [Exception](/features/exception.md)

