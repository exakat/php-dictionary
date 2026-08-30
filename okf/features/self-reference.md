---
type: "PHP Feature"
title: "Self-reference"
description: "A self-reference is a reference into one-self."
resource: "https://en.wikipedia.org/wiki/Self-reference"
tags: ["reference", "self-reference"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Self-reference

A self-reference is a reference into one-self. 

An array may hold a reference onto itself. Some functions are disrupted by these references, and yield ``recursion detected``: ``compact()``, ``count()``, ``var_export()``, etc... 

``$GLOBALS`` is a self-reference array: it contains a reference onto itself, as it is also a global variable.

Variables cannot be self-reference, although they might reference another variable, stored in themselves.

```php
<?php

    $x = 1;
    $x = &$x;

    $array = [1,2,3, &$array];

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Self-reference](https://en.wikipedia.org/wiki/Self-reference)

## See Also
- [9 Recipe for Self-Referential Data (Recursive Types)](https://postfix.hci.uni-hannover.de/files/prog1script-postfix/recipe-self-referential.html)
- [Everything You Need to Know About Self-Referential Structures in C](https://trendingsource.github.io/2024-02-02-everything-you-need-to-know-about-self-referential-structures-in-c/)

## Related
- [Variables](/features/variable.md)
- [Array, []](/features/array.md)
- [References](/features/reference.md)

