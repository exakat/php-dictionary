---
type: "unsupported"
title: "Pointer"
description: "Pointers are a fundamental concept in programming, especially in languages like C and C++."
resource: "https://en.wikipedia.org/wiki/Pointer_(computer_programming)"
tags: ["unsupported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pointer

Pointers are a fundamental concept in programming, especially in languages like C and C++. A pointer is a variable that stores the memory address of another variable.

PHP does not support a notion of pointer. The closest feature is called 'reference', yet it is quite different from pointers.

```php
<?php

$a = 1;
$b = &$a;
$b = 2;

echo $a; // 2 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Pointer_(computer_programming)](https://en.wikipedia.org/wiki/Pointer_(computer_programming))

## See Also
- [References Explained](https://www.php.net/manual/en/language.references.php)

## Related
- [References](/features/reference.md)

