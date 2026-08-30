---
type: "PHP Feature"
title: "one"
description: "One is the ``1`` integer."
resource: "https://en.wikipedia.org/wiki/Magic_number_(programming)"
tags: ["truthy"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# one

One is the ``1`` integer. One is part of the truthy values: it is the equivalent of ``true``. 

Multiplying, or dividing, a string by 1 turns it into an integer, just like the cast operator ``(int)`` does.

1 is one of the two valid index when building a callback with an array, along with 0.

1 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.

```php
<?php

    $one = 1;

    $four = 4 * 1;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Magic_number_(programming)](https://en.wikipedia.org/wiki/Magic_number_(programming))

## See Also
- [phpmnd: PHP Magic Number Detector](https://github.com/povils/phpmnd)
- [PHP: Booleans - Manual](https://www.php.net/manual/en/language.types.boolean.php)

## Related
- [False](/features/false.md)
- [Callbacks](/features/callback.md)
- [zero](/features/zero.md)
- [Multiplication](/features/multiplication.md)
- [Callable Arrays](/features/array-callable.md)
- [Array Callback](/features/array-callback.md)
- [Minus One -1](/features/minus-one.md)
- [Truthy](/features/truthy.md)
- [Magic Numbers](/features/magic-number.md)
- [Logarithm](/features/logarithm.md)
- [Post-increment](/features/post-increment.md)
- [zend.assertions](/features/zend-assertions.md)

