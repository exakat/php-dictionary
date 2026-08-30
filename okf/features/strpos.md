---
type: "PHP Feature"
title: "strpos"
description: "``strpos()`` is a built-in PHP function that finds the position of the first occurrence of a string inside another string."
resource: "https://www.php.net/manual/en/function.strpos.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# strpos

``strpos()`` is a built-in PHP function that finds the position of the first occurrence of a string inside another string.

It is often used to check if a string contains another string. When the presence of the string is the main goal of the check, it is advantageously replaced by ``str_contains()``, ``str_starts_with()`` or ``str_ends_with()``. Otherwise, this function is prone to the ``strpos()`` syndrome, a classic PHP trap.

``strpos()`` has a case-insensitive version called ``stripos()``.

```php
<?php

    if(strpos('abc', 'b')) {
        print "The string contains a `b`.";
    } 
    
    // Error! 'a' is at position 0, which is confused with false
    if(strpos('abc', 'a')) {
        print "The string contains a `b`.";
    } 
    
    // This is OK
    if(strpos('abc', 'a') !== false) {
        print "The string contains a `b`.";
    } 

?>
```

## Documentation
- [https://www.php.net/manual/en/function.strpos.php](https://www.php.net/manual/en/function.strpos.php)

## See Also
- [Strpos - vulnerability](https://sivaramaaa.github.io/blog/prgm_vuln1.html)

## Related
- [Strpos() Syndrome](/features/strpos-syndrom.md)
- [Identical Operator](/features/identical.md)
- [str_contains()](/features/str_contains.md)
- [str_starts_with()](/features/str_starts_with.md)
- [str_ends_with()](/features/str_ends_with.md)
- [fnmatch()](/features/fnmatch.md)

