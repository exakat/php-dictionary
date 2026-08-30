---
type: "PHP Feature"
title: "Preg_match"
description: "``preg_match()`` searches a string for a match to the regular expression given in pattern."
resource: "https://www.php.net/manual/en/function.preg-match.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Preg_match

``preg_match()`` searches a string for a match to the regular expression given in pattern.

``preg_match()`` only returns the first found match. When several matches are expected, use this function recursively with the ``$offset`` pattern, or call ``preg_match_all()``.

The first argument is the regex, and the second argument is the string being searched. 

The third argument, when provided, receives the results of the search, if any. It also contains the capturing sub patterns results. The variable content is replaced by an array: references are also lost. When an error occurs, the variable is left intact.

An ``$offset`` argument is available, to start the search beyond the beginning of the string.

``preg_match()`` returns 1 if there is at least one matched string, and 0 otherwise. It also returns ``false`` in case of error during execution, such as invalid regex, or passing backtracking limits. It is recommended to use ``===`` with its result.

```php
<?php

    preg_match('/(a)/i', 'aAba', $r);
    print_r($r); // ['a', 'a']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.preg-match.php](https://www.php.net/manual/en/function.preg-match.php)

## See Also
- [PHP string substring detection: powerful application of preg_match](https://global.php.cn/faq/1797073498.html)

## Related
- [Regular Expression](/features/regex.md)
- [Strpos() Syndrome](/features/strpos-syndrom.md)
- [fnmatch()](/features/fnmatch.md)
- [str_contains()](/features/str_contains.md)
- [preg_replace()](/features/preg_replace.md)

## Details
- Extension: ext-pcre

