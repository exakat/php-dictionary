---
type: "PHP Feature"
title: "Reflector"
description: "``Reflector`` is the base interface that all PHP Reflection classes implement."
resource: "https://www.php.net/manual/en/class.reflector.php"
tags: ["reflection", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Reflector

``Reflector`` is the base interface that all PHP Reflection classes implement. It declares ``__toString()``, providing a common type for all reflection objects.

All reflection classes, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionFunction``, ``ReflectionProperty``, ``ReflectionParameter``, etc., implement this interface, allowing code to accept any reflector generically.

```php
<?php

    function describeReflector(Reflector $r): void {
        echo (string) $r . PHP_EOL;
    }
    
    describeReflector(new ReflectionClass(DateTime::class));
    describeReflector(new ReflectionFunction('array_map'));

?>
```

## Documentation
- [https://www.php.net/manual/en/class.reflector.php](https://www.php.net/manual/en/class.reflector.php)

## See Also
- [ReflectionClass Class](https://www.php.net/manual/en/class.reflectionclass.php)

## Related
- [Reflection](/features/reflection.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [Introspection](/features/introspection.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1

