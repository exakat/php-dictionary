---
type: "static analysis"
title: "Lint, Won't Execute"
description: "``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed."
resource: "https://www.php.net/manual/en/features.commandline.options.php"
tags: ["source code", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lint, Won't Execute

``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.

This covers a range of problems, from very obvious to hidden syntaxes. They depend on the moment where PHP applies its checks.

Some situations depend on the inclusion, autoloading and, generally, the order of execution of the code.

```php
<?php

    function foo() {
        clone 1; // obviously fails when executed
    }
    
    function goo(int $a = A) {}
    const A = 'abc';
    
    // fails when called without arguments
    foo(1); // OK
    foo();  // KO

?>
```

## Documentation
- [https://www.php.net/manual/en/features.commandline.options.php](https://www.php.net/manual/en/features.commandline.options.php)

## See Also
- [PHP errors](https://www.php.net/manual/en/language.errors.php)
- [Autoloading Classes](https://www.php.net/manual/en/language.oop5.autoload.php)

## Related
- [Source Code](/features/source.md)
- [Parse](/features/parse.md)
- [Fatal Error](/features/fatal-error.md)
- [Syntax Error](/features/syntax-error.md)
- [Error](/features/error.md)

