---
type: "PHP Feature"
title: "global Scope"
description: "The global scope is the top level scope."
resource: "https://www.php.net/manual/en/reserved.variables.globals.php"
tags: ["variable", "feature", "bad practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# global Scope

The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the ``global`` keyword, or the ``$GLOBALS`` variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the ``global`` keyword has that effect too.

Some special variables are called superglobal: they are available in every scope.

The opposite of the global scope is the local scope.

```php
<?php

    $x = 'A';
    
    function counter() {
        echo $GLOBALS['A'];
    
        global $x;
        
        echo $x;
    }
    
    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.globals.php](https://www.php.net/manual/en/reserved.variables.globals.php)

## See Also
- [PHP global keyword - Accessing Global Variables in PHP](https://zetcode.com/php/global-keyword/)
- [PHP $GLOBALS](https://www.geeksforgeeks.org/php/php-globals/)

## Related
- [Variables](/features/variable.md)
- [Static Variables](/features/static-variable.md)
- [Variable Variables](/features/variable-variable.md)
- [Global Variables](/features/global-variable.md)
- [Namespaces](/features/namespace.md)
- [$argv](/features/$argv.md)
- [glob()](/features/glob.md)
- [Local Scope](/features/local.md)
- [Scope](/features/scope.md)
- [Fallback To Global](/features/fallback-to-global.md)
- [Variable Scope](/features/variable-scope.md)
- [Superglobal Variables](/features/superglobal.md)

