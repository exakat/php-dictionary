---
type: "exception"
title: "ReflectionException"
description: "ReflectionException is thrown whenever the Reflection API encounters an error."
resource: "https://www.php.net/manual/en/class.reflectionexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ReflectionException

ReflectionException is thrown whenever the Reflection API encounters an error.

Common reasons for encountering a ReflectionException include:

+ Class Not Found
+ Property Not Found
+ Method Not Found
+ Invalid Argument.

```php
<?php

    try
    {
        $ref = new ReflectionClass($class);
    }
    catch (ReflectionException $e)
    {
        var_dump($e->getMessage());
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.reflectionexception.php](https://www.php.net/manual/en/class.reflectionexception.php)

## See Also
- [ReflectionClass Class](https://www.php.net/manual/en/class.reflectionclass.php)

## Related
- [Reflection](/features/reflection.md)

