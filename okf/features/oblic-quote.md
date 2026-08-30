---
type: "character"
title: "Oblic Quotes"
description: "Oblic quotes, also called backticks, `` \\` `` were used to make a shell call to the operating system."
resource: "https://www.php.net/manual/en/language.operators.execution.php"
tags: ["operator", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Oblic Quotes

Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system. They are deprecated since version 8.5, and they have no more specific usage.

`` \` `` is a character, that needs to be balanced, when used in code syntax.

```php
<?php

    echo `ls -hla`;
    
    // moder alternative
    echo shell_exec('ls -hla');

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.execution.php](https://www.php.net/manual/en/language.operators.execution.php)

## See Also
- [PHP RFC: Deprecate backtick operator](https://wiki.php.net/rfc/deprecate-backtick-operator-v2)
- [Backtick Operator to Run Shell Command is Deprecated in PHP 8.5](https://lindevs.com/backtick-operator-to-run-shell-command-is-deprecated-in-php-8-5)

## Related
- [Balanced](/features/balanced.md)
- [Double Quotes Strings](/features/double-quote.md)
- [Single Quotes Strings](/features/single-quote.md)

## Details
- PHP until: 8.5

