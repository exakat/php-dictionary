---
type: "concept"
title: "Defer Statement"
description: "Go's ``defer`` statement schedules a function call to run when the enclosing function returns, regardless of which ``return`` statement was reached or whether a panic is in flight: ``defer file.Close()`` right after opening a file guarantees the close happens at every exit path, without needing a ``finally`` block."
resource: "https://en.wikipedia.org/wiki/Manual_memory_management#Defer"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Defer Statement

Go's ``defer`` statement schedules a function call to run when the enclosing function returns, regardless of which ``return`` statement was reached or whether a panic is in flight: ``defer file.Close()`` right after opening a file guarantees the close happens at every exit path, without needing a ``finally`` block. Multiple deferred calls run in last-in-first-out order, and they can still read and modify the function's named return values before it actually returns.

Unlike a ``try``/``finally`` block, ``defer`` is not tied to a lexical block: it can be scattered anywhere in the function body, right next to the resource acquisition it cleans up, rather than requiring the rest of the function to be wrapped in a block.

PHP has no ``defer`` statement. Guaranteed cleanup on every exit path is expressed with ``try``/``finally``, which does require wrapping the relevant code in a block, or with a destructor ``__destruct()`` that runs when the object holding the resource is garbage-collected, which is not guaranteed to happen at a predictable point in the function's execution.

```php
<?php

    // No defer: cleanup must be wrapped, or moved into a destructor.
    function readConfig(string $path): array {
        $handle = fopen($path, 'r');
        try {
            return parse($handle);
        } finally {
            fclose($handle);
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Manual_memory_management#Defer](https://en.wikipedia.org/wiki/Manual_memory_management#Defer)

## See Also
- [Defer statement in the Go specification](https://go.dev/ref/spec#Defer_statements)

## Related
- [Finally](/features/finally.md)
- [Destructor](/features/destructor.md)
- [Exception](/features/exception.md)

