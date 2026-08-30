---
type: "PHP Feature"
title: "Compact Array"
description: "An array is compact, or a packed array, if it only uses automated indices, starting with 0."
resource: "https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html"
tags: ["optimisation", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compact Array

An array is compact, or a packed array, if it only uses automated indices, starting with 0. This doesn't really show in the written code, though performances are better for some operations.

Such array's status may be reached by using ``array_values()`` or ``array_keys()`` on the array: such functions reindexes the values in the array.

This notion is not related to the ``compact()`` function.

```php
<?php

    $array = [1,2,3];

    $notCompact = [1,2,3, 4=>4];

    $compactAgain = array_values($notCompact);

?>
```

## Documentation
- [https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html](https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html)

## See Also
- [PHP 7 performance improvements (1/5): Packed arrays](https://blog.blackfire.io/php-7-performance-improvements-packed-arrays.html)

## Related
- [Array, []](/features/array.md)
- [compact()](/features/compact.md)
- [array_values()](/features/array_values.md)
- [array_keys()](/features/array_keys.md)
- [Simple Switch](/features/simple-switch.md)

