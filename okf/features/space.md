---
type: "character"
title: "Space"
description: "Space is the `` `` character: it is an invisible character."
resource: "https://en.wikipedia.org/wiki/Whitespace_character"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Space

Space is the `` `` character: it is an invisible character. It serves as a separator between tokens, and is mostly unused by PHP execution engine.

Space is part of a class of invisible characters, called whitespaces, along with new line ``\n``, carriage return ``\r``, line feed ``\f`` and horizontal tabulation ``\t``.

Spaces inside PHP code usually carry no value but to separate visually elements in the code. They are sometimes important, as in designing floats, or not important, with some operators, ``$a []= 1`` is actually the same as ``$a[] = 1`` or ``$a [ ] = 1``.

Spaces outside the PHP tags are important, as they are delivered as is to the client. Any white space set before the opening ``<?php`` PHP tag may be send before PHP code is executed, leading to the infamous ``Cannot modify header information - headers already sent``.

```php
<?php

    // space is mostly ignored in PHP code
    $string = ' a ';
    // space is important inside literal, such as strings
    
    echo 1 . 2; // here, space is important
    echo 1.2; // here, space is important

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Whitespace_character](https://en.wikipedia.org/wiki/Whitespace_character)

## See Also
- [Spaces in a PHP file. Unexpected output](https://designdebt.club/spaces-in-a-php-file/)

## Related
- [Heredocs](/features/heredoc.md)
- [Indentation](/features/indentation.md)
- [Non Breakable Spaces](/features/non-breakable-space.md)
- [Nowdocs](/features/nowdoc.md)
- [Tabulation](/features/tabulation.md)

