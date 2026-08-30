---
type: "concept"
title: "Appeasement Pattern"
description: "The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue."
resource: "https://en.wikipedia.org/wiki/Code_smell"
tags: ["concept", "security", "code smell", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Appeasement Pattern

The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue.

Common PHP manifestations include: using the ``@`` error suppression operator to hide failures, loosening type checks to accept any input, adding special-case exceptions to a validator for a specific caller, or gradually degrading a strict check into a permissive one to avoid breakage.

The appeasement pattern also happens with static analysis: the tool may not support a particular syntax, lack helpful context or the code may simply be ambiguous. The appeasement pattern leads to more verbose or convoluted code, so as to allow extra configuration.

The appeasement pattern leads to fragile code where hidden failures accumulate silently, security assumptions erode, and bugs become much harder to diagnose. The correct approach is to fix the root cause rather than appease the symptom.

```php
<?php

    // Appeasement: silencing an error instead of fixing it
    $result = @file_get_contents($untrustedPath); // failure is hidden
    
    // Appeasement: loosening a type check to stop a caller from failing
    function process(mixed $value): void {
        // was: if (!is_int($value)) { throw new \InvalidArgumentException(); }
        // now silently coerces because one caller passes strings
        $value = (int) $value;
    }
    
    // SCA Appeasement: 
    // $url has already been checked for being a valid URL so this will always works
    /** @var array{0: string, 1: string} $r */
    preg_match(#(http)s?://#, $url, $r);
    echo $r[0];

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Code_smell](https://en.wikipedia.org/wiki/Code_smell)

## See Also
- [Error suppression operator](https://www.php.net/manual/en/language.operators.errorcontrol.php)

## Related
- [Error Suppression](/features/error-suppression.md)
- [Security](/features/security.md)
- [Code Smell](/features/code-smell.md)
- [Implicit](/features/implicit.md)
- [Hidden State](/features/hidden-state.md)
- [Vulnerability](/features/vulnerability.md)
- [Distributed State](/features/distributed-state.md)

