---
type: "type"
title: "Literal Types"
description: "Literal types are types which not only check the type of a value but also the value itself."
resource: "https://www.php.net/manual/en/language.types.string.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Literal Types

Literal types are types which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0.

```php
<?php

    // bool is a type
    // false is a literal type : a bool, which value is false
    function foo(bool $a) : false {
        return false;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php](https://www.php.net/manual/en/language.types.string.php)

## See Also
- [PHP RFC: Allow null and false as stand-alone types](https://wiki.php.net/rfc/null-false-standalone-types)
- [PHP RFC: Add true type](https://wiki.php.net/rfc/true-type)

## Related
- [Scalar Types](/features/scalar-type.md)
- [Union Type](/features/union-type.md)
- [Relative Types](/features/relative-types.md)

## Details
- PHP since: 8.0

