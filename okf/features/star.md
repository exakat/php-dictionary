---
type: "disambiguation"
title: "Star *"
description: "``*`` is a character, used in various situations: + Multiplication: ``3 * 2 == 6`` + Power: ``3 ** 2 == 3 * 3 == 9`` + With slash, ``/*`` is a multi line comment: ``/* */`` + With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``."
resource: "https://en.wikipedia.org/wiki/Asterisk"
tags: ["disambiguation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Star *

``*`` is a character, used in various situations: 

+ Multiplication: ``3 * 2 == 6``
+ Power: ``3 ** 2 == 3 * 3 == 9``
+ With slash, ``/*`` is a multi line comment: ``/* */``
+ With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.
+ As a wildcard in ``glob()`` calls
+ As a wildcard in ``fnmatch()`` calls
+ As a wildcard for all columns in SQL queries: ``SELECT * FROM table``
+ As a quantifier in regex: 0 or more, for example ``/a*/``
+ As part of a multiline comment with ``/** */`` and ``/* */``.

```php
<?php

    file_get_contents('/tmp/test.txt');
    
    echo 2 * 3; // 6 
    echo 2 ** 3; // * 
    
    /*
     A multiline comment
    */

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Asterisk](https://en.wikipedia.org/wiki/Asterisk)

## See Also
- [Glob (programming)](https://en.wikipedia.org/wiki/Glob_(programming))
- [PHP: fnmatch()](https://www.php.net/manual/en/function.fnmatch.php)

## Related
- [Multiplication](/features/multiplication.md)
- [Comments](/features/comment.md)
- [Exponential](/features/exponential.md)
- [Regular Expression](/features/regex.md)
- [Structured Query Language (SQL)](/features/sql.md)
- [glob()](/features/glob.md)
- [fnmatch()](/features/fnmatch.md)

