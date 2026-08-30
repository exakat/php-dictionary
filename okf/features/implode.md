---
type: "PHP Feature"
title: "implode()"
description: "The ``implode()`` function is used to join elements of an array into a glue, placed between each element."
resource: "https://www.php.net/manual/en/function.implode.php"
tags: ["native function", "micro-optimisation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# implode()

The ``implode()`` function is used to join elements of an array into a glue, placed between each element.

``implode()`` uses the first argument as the separator, and the second as the array. In older versions of PHP, this order could be reversed, but it recommended to avoid using it, as that feature was removed.

``implode()`` has an alias called ``join()``.

``implode()`` converts the elements of the array to string before merging them in a string. In particular, objects are converted to string with the magic-method, and sub-arrays are converted to ``Array``, with a warning. Backed enumerations are not usable with that function.

``implode()`` is faster to concatenate multiple strings than accumulating the concatenations in a single string. This happens because there is less need to allocate memory piecemeal.

```php
<?php

declare(strict_types=1);

class x {
    function __toString() {
        return 'c';
    }
}

$x = new x();
echo implode('a', ['a', 'b', new x()]);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.implode.php](https://www.php.net/manual/en/function.implode.php)

## See Also
- [How to use implode() in PHP (with examples)](https://tinkerwell.app/blog/how-to-use-implode-in-php)

## Related
- [Concatenation .](/features/concatenation.md)
- [Micro-optimisation](/features/micro-optimisation.md)
- [Separator](/features/separator.md)

