---
type: "PHP Feature"
title: "Pattern Matching"
description: "Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables."
resource: "https://wiki.php.net/rfc/pattern-matching"
tags: ["feature", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pattern Matching

Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables. In a sense it serves a similar purpose for complex data structures as regular expressions do for strings.

```php
<?php

    // This code is extracted from the RFC
    // It is not valid PHP code, as of PHP 8.4. 
    
    // The \is\ keyword evaluates to a boolean.
    if ($var is <pattern>) {
      // Do stuff
    }
     
    // Basic type matching
    $var is string;
    $var is int|float;
    $var is ?array;
    $var is (Account&Authenticated)|User;
    $var is mixed; // Matches anything, effectively a wildcard.
     
    // Literal patterns
    $var is \foo\;
    $var is 5;
    $var is 3|5|null;
    $var is 'heart'|'spade'|self::Wild;
 
?>
```

## Documentation
- [https://wiki.php.net/rfc/pattern-matching](https://wiki.php.net/rfc/pattern-matching)

## See Also
- [Pattern matching](https://en.wikipedia.org/wiki/Pattern_matching)

## Related
- [Syntax](/features/syntax.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Generalized Algebraic Data Type (GADT)](/features/gadt.md)
- [Sealed Class](/features/sealed-class.md)
- [Sum Type](/features/sum-type.md)
- [Option Type](/features/option-type.md)
- [Pattern](/features/pattern.md)
- [Range Type](/features/range-type.md)
- [Result Type](/features/result-type.md)
- [Structural Pattern Matching](/features/structural-pattern-matching.md)

