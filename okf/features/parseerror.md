---
type: "PHP Feature"
title: "ParseError"
description: "A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code."
resource: "https://www.php.net/manual/en/class.parseerror.php"
tags: ["parse", "eval"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ParseError

A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code.

```php
<?php

try {
    eval (' A A ');
} catch (ParseError $e) {
    echo "This is not PHP code";
}

?>
```

## Documentation
- [https://www.php.net/manual/en/class.parseerror.php](https://www.php.net/manual/en/class.parseerror.php)

## See Also
- [What is a Parse Error?](https://www.ionos.com/help/hosting/troubleshooting-for-php/what-is-a-parse-error/)
- [Syntax errors](https://php-errors.readthedocs.io/en/latest/syntaxerror.html)

## Related
- [Error](/features/error.md)
- [Eval()](/features/eval.md)
- [Parse](/features/parse.md)
- [Parser](/features/parser.md)

## Details
- PHP since: 7.0+

