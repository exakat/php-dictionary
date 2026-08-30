---
type: "token"
title: "Colon"
description: "Colons are used in a variety of situations: + With named parameters, to separate the name from the value + With labels, for goto + With ternary operator, separated or not from the question mark + In ``include_path`` and ``open_basedir``, double-colon is used as a separator The double colon is a distinct operator."
resource: "https://en.wikipedia.org/wiki/Colon_(punctuation)"
tags: ["syntax", "token", "punctuation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Colon

Colons are used in a variety of situations: 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark
+ In ``include_path`` and ``open_basedir``, double-colon is used as a separator

The double colon is a distinct operator.

```php
<?php

    goto there;
    there:

    foo(a: 3); // 

    $b = $a ? 'a' : 'b';
    $c = $c ?: 'a';

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Colon_(punctuation)](https://en.wikipedia.org/wiki/Colon_(punctuation))

## See Also
- [goto](https://www.php.net/manual/en/control-structures.goto.php)
- [Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)

## Related
- [Goto](/features/goto.md)
- [Goto Labels](/features/label.md)
- [Ternary Operator](/features/ternary.md)
- [Coalesce Operator](/features/coalesce.md)
- [Named Parameters](/features/named-parameter.md)
- [Separator](/features/separator.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Semicolon ;](/features/semicolon.md)
- [Static Class](/features/static-class.md)

