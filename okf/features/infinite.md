---
type: "concept"
title: "Infinite"
description: "Infinite means that an operation is repeated and will never stop being repeated."
resource: "https://www.php.net/manual/en/math.constants.php"
tags: ["concept", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Infinite

Infinite means that an operation is repeated and will never stop being repeated. 

Infinite is characteristics of loops, generators, recursive functions and streams. Infinite structures may be a bug or a feature, depending on the usage. For example, the event loop is usually an infinite loop, until one of the event triggers a jump out of the loop.

Infinite is also a PHP constant: ``INF``.

``INF`` is cast to string as ``'INF'``, to integer as ``0``, to boolean as ``true``, and to float as ``'INF'``.

```php
<?php

// infinite loops
while(true) { }

for(;;) {} 

// infinite generator 
function integers() {
    $i = 0;
    while(true) {
        yield $i++;
    }
}

// infinite Fibbonacci sequence
function recursive ($a = 1, $b = 1) {
    $a2 = $b;
    $b2 = $a + $b;
    print $b2.PHP_EOL;
    recursive($a2, $b2);
}

?>
```

## Documentation
- [https://www.php.net/manual/en/math.constants.php](https://www.php.net/manual/en/math.constants.php)

## See Also
- [is_infinite](https://www.php.net/manual/en/function.is-infinite.php)
- [Infinity (Wikipedia)](https://en.wikipedia.org/wiki/Infinity)

## Related
- [INF](/features/inf.md)
- [Infinite Loop](/features/infinite-loop.md)

