---
type: "token"
title: "Concatenation ."
description: "Concatenation is the PHP feature that appends two strings together, to make a third, longer one."
resource: "https://www.php.net/manual/en/language.operators.string.php"
tags: ["feature", "concatenation", "token", "punctuation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Concatenation .

Concatenation is the PHP feature that appends two strings together, to make a third, longer one.

Concatenation is also achieved with interpolation, inside a string; by calling echo, multiple times or with multiple arguments; by using the ``join()`` function.

Concatenation is done with the dot operator ``.``.

```php
<?php

    $a = "world";
    $b = "Hello ";
    echo $b . $a; 
    // displays Hello world

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.string.php](https://www.php.net/manual/en/language.operators.string.php)

## See Also
- [All String Concatenations in PHP](https://www.exakat.io/en/all-string-concatenations-in-php/)

## Related
- [String](/features/string.md)
- [Interpolation](/features/interpolation.md)
- [Heredocs](/features/heredoc.md)
- [__toString() Method](/features/__tostring.md)
- [implode()](/features/implode.md)

