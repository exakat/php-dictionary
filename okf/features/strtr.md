---
type: "PHP Feature"
title: "strtr()"
description: "``strtr()`` is a PHP native function that translates characters or replaces substrings in a string."
resource: "https://www.php.net/manual/en/function.strtr.php"
tags: ["native function", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# strtr()

``strtr()`` is a PHP native function that translates characters or replaces substrings in a string.

It has two signatures. With three arguments, ``strtr($string, $from, $to)``, it replaces each character found in ``$from`` with the character at the same position in ``$to``. Both strings must have the same length; extra characters in the longer one are ignored.

With two arguments, ``strtr($string, $replace_pairs)``, it takes an array mapping substrings to their replacements. Unlike ``str_replace()``, ``strtr()`` replaces the longest matching keys first and does not rescan replaced text, which avoids double substitutions.

``strtr()`` is often faster than multiple chained ``str_replace()`` calls when doing several substitutions at once.

```php
<?php

    echo strtr('Hello World', 'ol', '0L'); // HeLL0 W0rLd

    $trans = ['Hello' => 'Hi', 'World' => 'Earth'];
    echo strtr('Hello World', $trans); // Hi Earth

    // Longest keys are matched first
    $trans = ['a' => 'X', 'ab' => 'Y'];
    echo strtr('ab', $trans); // Y, not XB

?>
```

## Documentation
- [https://www.php.net/manual/en/function.strtr.php](https://www.php.net/manual/en/function.strtr.php)

## See Also
- [A Practical Guide to PHP's strtr() Function](https://reintech.io/blog/a-practical-guide-to-phps-strtr-function)

## Related
- [str_replace()](/features/str_replace.md)
- [String](/features/string.md)
- [strpos](/features/strpos.md)

