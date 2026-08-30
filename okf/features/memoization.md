---
type: "PHP Feature"
title: "Memoization"
description: "Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results."
resource: "https://eddmann.com/posts/implementing-and-using-memoization-in-php/"
tags: ["technique"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Memoization

Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results. 

Usually, memoization trades processing time with memory. The best suited situation are when the load takes some time to process, and the result is a small amount of memory, such as a count.

```php
<?php

function docs($file) {
    // local cache 
    static $cache = [];
    
    // If it was already cached, use it. 
    // Docs are supported to be constant during the execution
    if (isset($cache[$file])) {
        return $cache[$file];
    }
    
    $cache[$file] = file_get_contents($file) ?? '';
}

?>
```

## Documentation
- [https://eddmann.com/posts/implementing-and-using-memoization-in-php/](https://eddmann.com/posts/implementing-and-using-memoization-in-php/)

## See Also
- [Memoization in PHP](https://www.honeybadger.io/blog/memoization-in-php/)

## Related
- [Cache](/features/cache.md)
- [Performance](/features/performance.md)
- [Optimisation](/features/optimisation.md)
- [Pure Function](/features/pure-function.md)
- [Functional Programming](/features/functional-programming.md)
- [Determinism](/features/determinism.md)

## Details
- PHP since: 4.0+

