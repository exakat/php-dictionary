---
type: "static analysis"
title: "Useless"
description: "Some piece of code is useless when it doesn't bring any feature to the code."
resource: "https://en.wikipedia.org/wiki/Dead_code"
tags: ["quality", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Useless

Some piece of code is useless when it doesn't bring any feature to the code. 

It may be the case of double checks, where a characteristic is checked twice in a row; or when the same operation is repeated multiple times, yet is idempotent.

It is also the case of unused calculations: they are processed, stored, but ultimately, not combined with anything else.

```php
<?php

function foo(array $array) {
    if (!empty($array)) {
        // foreach() checks automatically the array for elements, and skips the loop when the array is empty.
        foreach($array as $a) {
            doSomething(); 
        }
    }
}

// foo is defined and called
$result = foo([]);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Dead_code](https://en.wikipedia.org/wiki/Dead_code)

## See Also
- [Code Smells: Dead Code](https://refactoring.guru/smells/dead-code)

## Related
- [Double Check](/features/double-check.md)
- [Idempotent](/features/idempotent.md)
- [Unused](/features/unused.md)
- [Noop](/features/noop.md)
- [Propagation](/features/propagation.md)

