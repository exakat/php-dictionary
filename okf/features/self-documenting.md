---
type: "PHP Feature"
title: "Self-documenting"
description: "A self-documenting piece of code may be understood without the need to read the documentation."
resource: "https://en.wikipedia.org/wiki/Self-documenting_code"
tags: ["documentation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Self-documenting

A self-documenting piece of code may be understood without the need to read the documentation. In particular, names are explicit and related to the application goals, and the methods and techniques are simple to relate to.

Self-documenting prevents developers from writing external documentation: this never falls out of synchronisation, as the code is the documentation itself. It also saves switching context to collect extra information.

Self-documenting relies on the reader's knowledge: one needs to have background know-how to confirm the code does what it means.

```php
<?php

function multiplication(int $left, int $right): int {
    $return = $left * $right;
    
    // usage of is_float() is not obvious, or self-documenting
    if (is_float($return)) {
        throw new OverflowException('The result is too big.');
    }
    
    return $return;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Self-documenting_code](https://en.wikipedia.org/wiki/Self-documenting_code)

## See Also
- [Keeping Your PHP Code Well Documented](https://www.sitepoint.com/keeping-php-code-well-documented/)

## Related
- [Docblock](/features/docblock.md)
- [Expressive Interface](/features/expressive-interface.md)

