---
type: "concept"
title: "Partial Function"
description: "A partial function is a function that has some parameters already known, and still needs some final ones before execution."
resource: "https://en.wikipedia.org/wiki/Partial_application"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Partial Function

A partial function is a function that has some parameters already known, and still needs some final ones before execution. The function is said ``partial``, as it can be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.

```php
<?php

function foo($a, $b, $c) { return $a + $b + $c; }

$a = 1;
$b = 2;
$partial = function ($c) use ($a, $b) { return foo($a, $b, $c); };

// as an arrow function
$partial = fn ($c) => foo($a, $b, $c);

goo($partial);

function goo(callable $partial) {
    $c = fetchDataSomewhere();
    
    return $partial($c);
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Partial_application](https://en.wikipedia.org/wiki/Partial_application)

## See Also
- [Currying - Wikipedia](https://en.wikipedia.org/wiki/Currying)
- [The Difference Between Currying and Partially Applied Functions](https://dzone.com/articles/difference-between-currying-amp-partially-applied)

## Related
- [Functional Programming](/features/functional-programming.md)
- [Partial Application](/features/partial-application.md)

## Details
- Packagist: [react/partial](https://packagist.org/packages/react/partial)

