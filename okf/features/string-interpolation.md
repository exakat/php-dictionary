---
type: "PHP Feature"
title: "String Interpolation"
description: "String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time."
resource: "https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double"
tags: ["string", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# String Interpolation

String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation: 

+ Use double-quotes and a variable
+ Use double-quotes and a property or an array with a valid index
+ Use curly braces with a variable
+ Use dollar and curly-braces: it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in version 8.2 and later.

Double quotes and Heredoc notation allow string interpolation. On the other hand, single quotes and nowdoc forbid interpolation. Then, escaping the special characters such as ``$`` and ``{`` with ``\\\\`` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.

```php
<?php

$world = 'world';
// This is an interpolated string
$string = "Hello $world";

// This is not an interpolated string
$string = 'Hollow $world';

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)

## See Also
- [PHP String Interpolation in 2026: Examples, Curly Braces, Heredoc, and PHP 8.2 Notes](https://phppot.com/php/variable-interpolation-in-php/)
- [PHP 8.2:  string interpolation deprecated](https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated)
- [PHP String Interpolation - Complete Tutorial with Examples](https://zetcode.com/php/string-interpolation/)

## Related
- [String](/features/string.md)

