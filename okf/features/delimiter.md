---
type: "PHP Feature"
title: "Delimiter"
description: "Delimiters are specific characters that start and end a specific area."
resource: "https://en.wikipedia.org/wiki/Delimiter"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Delimiter

Delimiters are specific characters that start and end a specific area. They are used in structured datasets, to identify a special value among others.

Delimiters are a kind of separator: while separators are the boundary between two distinct values, delimiters frame them with a beginning and an end.

Delimiters may be the same at the beginning and the end. For example, single or double quotes for strings. Or the classic ``/`` for regexes, which may actually be any non-alpha-numeric character.

Delimiters may be different at the beginning and the end. For example, parentheses ``()`` and curly braces ``{}``, or the PHP tags, ``<?php  ?>``.

Inside the structure, the delimiters are forbidden, to avoid confusing them with the actual limits of the data. If the delimiter characters are needed inside the structure, they may be escaped with another character, such as the backslash inside strings ``'\''``; the delimiters may be replaced by another delimiter, such as in regex where a lot of delimiters are possible; they may also be deactivated with options, such as ``\Q`` and ``\E`` in regexes.

```php
<?php

    // delimiters for strings
    echo '';
    
    // special options in regexes
    print preg_match('/^\Q'.$regex.'\E$/i', 'tests') ? 'match' : 'nomatch';

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Delimiter](https://en.wikipedia.org/wiki/Delimiter)

## See Also

## Related
- [Separator](/features/separator.md)

