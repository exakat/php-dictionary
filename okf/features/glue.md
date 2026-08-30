---
type: "folklore"
title: "Glue"
description: "Glue represents the piece of string that is used as separator between elements in a ``join()`` operation."
resource: "https://www.php.net/manual/en/function.implode.php"
tags: ["folklore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Glue

Glue represents the piece of string that is used as separator between elements in a ``join()`` operation. Glue is also called a separator.

``glue`` is the historical name of the first parameter of PHP's ``implode()`` function, which is an alias for ``join()``. It is the string inserted between every pair of consecutive elements of the array being turned into a single string. An empty glue, ``''``, concatenates the elements without anything between them, while a glue such as ``', '`` produces a comma-separated list.

Before PHP 8.0, ``implode()`` also accepted its arguments in the reverse order, ``implode($array, $glue)``, for backward compatibility with very old PHP code; this reversed form was deprecated and later removed, so the glue must now always be passed first, or as the named argument ``separator`` in the array signature, ``implode(array $array, string $separator = "")``. As of PHP 8.0, the parameter itself was actually renamed from ``glue`` to ``separator`` in the official documentation and function signature, even though the older name is still commonly used in tutorials and community discussions.

The reverse operation, splitting a string back into an array using a delimiter, is performed by ``explode()``, which uses a parameter historically called ``separator`` as well, playing a symmetrical role to ``glue``.

```php
<?php

    print join(glue, [1, 2, 3]);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.implode.php](https://www.php.net/manual/en/function.implode.php)

## See Also
- [PHP | Imploding and Exploding](https://www.geeksforgeeks.org/php/php-imploding-exploding/)
- [How to use implode() in PHP (with examples)](https://tinkerwell.app/blog/how-to-use-implode-in-php)

## Related
- [Separator](/features/separator.md)

