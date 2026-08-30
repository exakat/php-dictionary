---
type: "language construct"
title: "Eval()"
description: "The ``eval()`` function executes a string as a PHP code."
resource: "https://www.php.net/manual/en/function.eval.php"
tags: ["language construct", "feature", "keyword", "bad practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Eval()

The ``eval()`` function executes a string as a PHP code.

``eval()`` has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before using on it.

When used, it is recommended to enclose ``eval()`` in a try-catch block, to catch syntax error.

```php
<?php

    $name = 'v';
    $value = 'vvvv';
    
    // Set a variable with a dynamic name
    eval('$'.$name.' = '.$value);
    // equivalent to $$name = $value;

?>
```

## Documentation
- [https://www.php.net/manual/en/function.eval.php](https://www.php.net/manual/en/function.eval.php)

## See Also
- [Eval function in PHP](https://www.tutorialspoint.com/eval-function-in-php)
- [The Land where PHP uses eval()](https://www.exakat.io/en/land-where-php-uses-eval/)

## Related
- [ParseError](/features/parseerror.md)
- [Code Injection](/features/code-injection.md)
- [Execution](/features/execution.md)
- [Capture The Flag (CTF)](/features/ctf.md)
- [Homoiconicity](/features/homoiconicity.md)
- [Hygienic Macro](/features/hygienic-macro.md)
- [Macro](/features/macro.md)
- [Metaprogramming](/features/metaprogramming.md)

