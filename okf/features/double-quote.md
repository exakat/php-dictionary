---
type: "animal"
title: "Double Quotes Strings"
description: "Double quoted strings are strings, similar to the single quoted strings."
resource: "https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double"
tags: ["delimiter", "syntax", "animal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Double Quotes Strings

Double quoted strings are strings, similar to the single quoted strings. They are also able to interpolate variables, properties and arrays, which are included at execution time. 

Double quoted strings do not interpolate constants. 

Double quoted strings support escape sequences, such as ``u{1F3c}`` or ``\n``.

This is an extended version of the single-quoted strings. They are similar to the heredoc syntax.

```php
<?php

    // single quoted string : all literal values
    $name = 'Elephpant loves $signs.'; 
    
    // single quoted string : all literal values
    $signs = 'PHP';
    $name = 'Elephpant loves $signs.';  // Elephpant loves PHP
    
    echo "\u{01f418}"; // escape sequence of an elephant

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)

## See Also
- [Single Quotes and Double Quotes : String Interpolation and Performance](https://dev.to/parzival_computer/single-quotes-and-double-quotes-string-interpolation-and-performance-32p2)

## Related
- [Single Quotes Strings](/features/single-quote.md)
- [Interpolation](/features/interpolation.md)
- [String](/features/string.md)
- [Heredocs](/features/heredoc.md)
- [Escape Sequences](/features/escape-sequence.md)
- [Balanced](/features/balanced.md)
- [Double](/features/double.md)
- [Oblic Quotes](/features/oblic-quote.md)

