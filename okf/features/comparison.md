---
type: "PHP Feature"
title: "Comparison"
description: "Comparison operators check how two values relate to each other."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Comparison

Comparison operators check how two values relate to each other. They may be equal or different, and, depending on the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, ``==``, ``<>``, ``<=>``, ``switch()`` and ``!=``, and with type checks, ``match()``, ``===`` and ``!==``. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications: ``strcmp()``, ``strcasecmp()``, ``strnatcasecmp()``, ``strcoll()``, ``similar_text()``, ``levensthein()``, ``bccomp()``, ``version_compare()``, ``hash_equals()``. 

Some of the functions include a loose or a strict version.

```php
<?php

    if ($a == $b) {
        print 'a and b are equal';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [PHP Variable Comparison](https://phpcheatsheets.com/compare/)
- [Difference between the (=), (==), and (===) operators in PHP](https://www.educative.io/answers/difference-between-the-and-operators-in-php)

## Related
- [Operators](/features/operator.md)
- [Type Juggling](/features/type-juggling.md)
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [Spaceship Operator](/features/spaceship.md)
- [Magic Hash](/features/magic-hash.md)
- [Truthy](/features/truthy.md)
- [Underscore](/features/underscore.md)
- [zero](/features/zero.md)
- [Identity Comparison](/features/identity-comparison.md)
- [Relaxed Comparison](/features/relaxed-comparison.md)
- [array_keys()](/features/array_keys.md)
- [Double Arrow](/features/double-arrow.md)
- [Triple](/features/triple.md)

