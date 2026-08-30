---
type: "type"
title: "Nullable"
description: "Nullable is the name of the NULL value, when used as a type."
resource: "https://www.php.net/manual/en/language.types.null.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Nullable

Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as a union type.

```php
<?php

    // argument has the short nullable type
    // return type has the long form nullable type
    function foo(?A $a) : null | B {
        // code
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.null.php](https://www.php.net/manual/en/language.types.null.php)

## See Also
- [Dealing with null](https://front-line-php.com/dealing-with-null)

## Related
- [Null](/features/null.md)
- [Type System](/features/type.md)
- [Contravariance](/features/type-contravariance.md)
- [Intersection Type](/features/intersection-type.md)
- [Property Type Declaration](/features/type-declaration-property.md)

## Details
- PHP since: 7.1

