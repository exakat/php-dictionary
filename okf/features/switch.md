---
type: "keyword"
title: "Switch"
description: "The ``switch`` expression branches evaluation based on an equality check of a value."
resource: "https://www.php.net/manual/en/control-structures.switch.php"
tags: ["keyword", "control flow"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Switch

The ``switch`` expression branches evaluation based on an equality check of a value. It also handles a ``default`` case, when none of the explicit cases match.

Each case is an expression, and shall be used that way. 

``switch`` use a relaxed comparison between the parameter value and the case values. This means that some type juggling happens, and some literals might behave as identical.

```php
<?php

$b = 1;
switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
    case 1:
        echo 'i equals 1';
        break;
    case $b + 1:
        echo 'i equals '.($b + 1);
        break;
    default:
        echo 'i is none of the expected values.';
}

switch (false) {
    case null:
        // false == null so this is the case
        echo 'This is null';
        break;
    case '':
        echo 'This is empty string';
        break;
    default:
        echo 'This is none of the expected values.';
}

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.switch.php](https://www.php.net/manual/en/control-structures.switch.php)

## See Also
- [Compact switch alternative](https://tomlankhorst.nl/compact-switch-alternative-php/)
- [PHP switch best practices](https://www.exakat.io/well-structured-switch-command-in-php/)

## Related
- [Match](/features/match.md)
- [Default](/features/default.md)
- [Strict Comparison](/features/strict-comparison.md)
- [Simple Switch](/features/simple-switch.md)
- [If Then Else](/features/if-then.md)
- [Break](/features/break.md)
- [Case](/features/case.md)
- [Comparison](/features/comparison.md)
- [Conditional Structures](/features/conditional-structure.md)
- [Control Flow](/features/control-flow.md)
- [Relaxed Comparison](/features/relaxed-comparison.md)
- [Semicolon ;](/features/semicolon.md)
- [Switch Case](/features/switch-case.md)
- [Switch Default](/features/switch-default.md)
- [Feature Flag](/features/feature-flag.md)

## Details
- PHP since: 4.0

