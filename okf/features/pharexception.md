---
type: "exception"
title: "PharException"
description: "The PharException class is a phar-specific exception."
resource: "https://www.php.net/manual/en/class.pharexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PharException

The PharException class is a phar-specific exception. It is raised my many Phar-related methods, and are generally differentiated based on their message, rather than having different types of exception. For example, ``'Cannot call constructor twice'`` or ``'Phar creation or opening failed'``.

```php
<?php

    $phar = new Phar($myPhar);
    try {
      $phar->extractTo($directory, 'directory/', true);
    } catch (PharException $ex) {
        print "An error happened while extracting the phar";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.pharexception.php](https://www.php.net/manual/en/class.pharexception.php)

## See Also
- [PHP Exception Handling - PharException](https://blog.airbrake.io/blog/php-exception-handling/pharexception)
- [A Beginner's Guide to the PHP Phar Library for Packaging and Distribution](https://reintech.io/blog/beginners-guide-php-phar-library-packaging-distribution)

## Related
- [Exception](/features/exception.md)

