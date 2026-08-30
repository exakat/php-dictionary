---
type: "keyword"
title: "Yield"
description: "In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function."
resource: "https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Yield

In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function.

```php
<?php

    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Note that $i is preserved between yields.
            yield $i;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield)

## See Also
- [Introduction to PHP yield](https://www.educba.com/php-yield/)

## Related
- [yield from Keyword](/features/yield-from.md)
- [Generator](/features/generator.md)
- [Jump](/features/jump.md)
- [Double Arrow](/features/double-arrow.md)
- [iterator_to_array()](/features/iterator_to_array.md)
- [range()](/features/range.md)
- [Stealth Generator](/features/stealth-generator.md)

## Details
- PHP since: 5.5

