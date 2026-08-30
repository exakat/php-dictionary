---
type: "keyword"
title: "Match"
description: "The ``match`` expression is the remote cousin of the ``switch``."
resource: "https://www.php.net/manual/en/control-structures.match.php"
tags: ["keyword", "expression", "control flow"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Match

The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone.

```php
<?php

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar'   => 'This food is a bar',
    'cake'  => 'This food is a cake',
    default => 'This is not food'
};

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.match.php](https://www.php.net/manual/en/control-structures.match.php)

## See Also
- [PHP Tricks: Multi-value match()](https://peakd.com/hive-168588/@crell/php-tricks-multi-value-match)

## Related
- [Switch](/features/switch.md)
- [Default](/features/default.md)
- [If Then Else](/features/if-then.md)
- [UnhandledMatchError](/features/unhandledmatcherror.md)
- [Case](/features/case.md)
- [Comparison](/features/comparison.md)
- [Conditional Structures](/features/conditional-structure.md)
- [Control Flow](/features/control-flow.md)
- [Switch Fallthrough](/features/fallthrough.md)
- [Simple Switch](/features/simple-switch.md)
- [Strict Comparison](/features/strict-comparison.md)
- [Switch Case](/features/switch-case.md)
- [Switch Default](/features/switch-default.md)
- [Arm](/features/arm.md)
- [Control Structures](/features/control-structure.md)
- [Identical Operator](/features/identical.md)
- [Streamlining](/features/streamlining.md)
- [Exhaustiveness](/features/exhaustiveness.md)
- [Idiomatic](/features/idiomatic.md)
- [Strict](/features/strict.md)
- [Sum Type](/features/sum-type.md)

## Details
- PHP since: 8.0

