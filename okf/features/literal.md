---
type: "concept"
title: "Literal"
description: "A literal is a hard coded value in the source."
resource: "https://www.php.net/manual/en/language.oop5.decon.php"
tags: ["syntax", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Literal

A literal is a hard coded value in the source.

Literals may be of type int, float, boolean, null, array.

Objects and resources cannot be hardcoded, though their creation call may be.

Literals are given names by creating a constant, global or class.

```php
<?php

    // Literal 1 to $a
    $a = 1;
    
    // The object is created during execution.
    $b = new X();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.decon.php](https://www.php.net/manual/en/language.oop5.decon.php)

## See Also
- [Literal (computer programming) - Wikipedia](https://en.wikipedia.org/wiki/Literal_(computer_programming))

## Related
- [Destructor](/features/destructor.md)
- [Constants](/features/constant.md)
- [Static Constant](/features/class-constant.md)
- [Inlining](/features/inlining.md)

