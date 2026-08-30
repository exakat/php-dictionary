---
type: "PHP Feature"
title: "Unserialization"
description: "Unserialization is the extraction of an object from a string representation of an object."
resource: "https://www.php.net/manual/en/language.oop5.serialization.php"
tags: ["dataformat"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unserialization

Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

There are different ways to implement serialization. The native way is to rely on the ``serialize()`` and ``unserialize()``, which, in turn, rely on the ``__serialize()`` and ``__unserialize()`` magic method. Then, ``var_export()`` and ``require()`` make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues.

```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            // same as \X::C;
            return self::C;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.serialization.php](https://www.php.net/manual/en/language.oop5.serialization.php)

## See Also
- [Benchmarking serialization](https://peakd.com/hive-168588/@crell/benchmarking-serialization)
- [The Dangers of PHP’s unserialize and How to stay safe](https://heera.it/the-dangers-of-phps-unserialize-and-how-to-stay-safe)
- [unserialize.com](https://www.unserialize.com)

## Related
- [__serialize() Method](/features/__serialize.md)
- [__unserialize() Method](/features/__unserialize.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)

## Details
- Packagist: [xkerman/restricted-unserialize](https://packagist.org/packages/xkerman/restricted-unserialize)

