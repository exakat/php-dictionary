---
type: "PHP Feature"
title: "fnmatch()"
description: "``fnmatch()`` is a native function for matching."
resource: "https://www.php.net/manual/en/function.fnmatch.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fnmatch()

``fnmatch()`` is a native function for matching. it applies the shell wildcard patterns to a string, and returns if it matches or not.

Wildcards include: 

+ ``*`` for anything
+ ``?`` for zero or one character
+ ``[]`` for a range of characters
+ ``!`` to negate characters in a bracket syntax
+ `` \ `` as the escape character

The search is case sensitive.

This function is useful to emulate a common system of search.

Simpler search tools include ``str_contains()`` and ``strpos()``, and more complex include ``preg_match()``.

```php
<?php

    $message = 'PHP rocks';
    if (fnmatch('*r[oi]cks', $message)) {
      echo 'But, of course...';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fnmatch.php](https://www.php.net/manual/en/function.fnmatch.php)

## See Also
- [Understanding and Implementing PHP's fnmatch() Function](https://reintech.io/blog/understanding-implementing-php-fnmatch-function)

## Related
- [str_contains()](/features/str_contains.md)
- [strpos](/features/strpos.md)
- [Preg_match](/features/preg_match.md)
- [Star *](/features/star.md)
- [Bang !](/features/bang.md)
- [Square Brackets](/features/square-bracket.md)
- [Question Mark ?](/features/question-mark.md)
- [Backslash \](/features/back-slash.md)

