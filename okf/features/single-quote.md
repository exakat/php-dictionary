---
type: "character"
title: "Single Quotes Strings"
description: "Single quoted strings are strings that include a literal value."
resource: "https://www.php.net/manual/en/ini.core.php#ini.disable-functions"
tags: ["string", "delimiter", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Single Quotes Strings

Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables ``$var``, single-dimension arrays ``$array[1]`` or ``$array[index]``, and single-dereferencing object members ``$object->member``. More complex expressions require usage of curly braces ``{$}``, or the usage of the dot operator.

Double quoted strings use the anti-slash ``\`` to escape special characters, such as the anti-slash and the ``$`` sign.

Single quote is also a simple characters. It is used for string, and as a delimiter in many other languages, such as HTML, XML or SQL.

```php
<?php

    // single quoted string : all literal values
    $name = 'elephpant loves $signs.'; 
    
    // double quoted string : variable value will be replaced at execution time.
    $greeting = "Hello! $name"; 
    
    // identical to
    $greeting = 'Hello! '.$name; 

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.disable-functions](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)

## See Also
- [What is the difference between single-quoted and double-quoted strings in PHP?](https://www.geeksforgeeks.org/php/what-is-the-difference-between-single-quoted-and-double-quoted-strings-in-php/)

## Related
- [Double Quotes Strings](/features/double-quote.md)
- [Heredocs](/features/heredoc.md)
- [Interpolation](/features/interpolation.md)
- [String](/features/string.md)
- [Dollar $](/features/dollar.md)
- [Balanced](/features/balanced.md)
- [Oblic Quotes](/features/oblic-quote.md)
- [Single](/features/single.md)

