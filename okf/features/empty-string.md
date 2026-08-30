---
type: "PHP Feature"
title: "Empty String"
description: "The empty string is a string without any content."
resource: "https://en.wikipedia.org/wiki/Empty_string"
tags: ["falsy"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Empty String

The empty string is a string without any content. It may be built with single quotes, double quotes or the Heredoc and NowDoc syntaxes.

The empty string is the neutral element for concatenation: concatenating an empty string to another string does not change the latter.

The empty string may be used as an error report: for example, ``substr()`` returns an empty string when the offset is beyond the string range.

The empty string often serves as a default value, for properties and variables.

Comparisons between ``''`` and other falsy values, such as ``0``, changed with PHP 8.0: it was true and became false.

The empty string is falsy: it is converted to the ``false`` boolean when implicit conversion is needed, such as in a condition.

```php
<?php

    $emptyString1 = '';  // single quote
    $emptyString2 = "";  // double quote
    $emptyString3 = <<<STRING
STRING;
    $emptyString4 = <<<'STRING'
STRING;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Empty_string](https://en.wikipedia.org/wiki/Empty_string)

## See Also
- [Strings](https://www.php.net/manual/en/language.types.string.php)
- [Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)

## Related
- [String](/features/string.md)
- [Heredocs](/features/heredoc.md)
- [Nowdocs](/features/nowdoc.md)
- [Falsy](/features/falsy.md)
- [file_put_contents()](/features/file_put_contents.md)
- [str_contains()](/features/str_contains.md)
- [zero](/features/zero.md)

