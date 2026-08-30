---
type: "PHP Feature"
title: "Static Variables"
description: "A static variable is a variable that retains its value across multiple function calls."
resource: "https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static"
tags: ["feature", "variable", "lesser known"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Variables

A static variable is a variable that retains its value across multiple function calls. Unlike regular variables, which are created and destroyed each time a function is called, static variables are initialized only once and persist throughout the entire execution of the script. 

To declare a static variable, use the ``static`` keyword inside a function. 

Static variables are commonly used when to keep track of certain information across function calls without the need to use global variables or properties. They are especially useful for counters, accumulators, caching, and memoization. However, it's essential to use them judiciously and avoid excessive reliance on them, as they can make code harder to maintain and understand if used indiscriminately.

Static variables may be refactored as a global variable or a property. 

Static variables may be declared only once, starting with PHP 8.3. Until that version, it is a best practice to only declare them once.

Static variables may use any PHP expressions to define their default value. That value is used when the variable is used for the first time.

```php
<?php

function counter() {
    static $count = 0;
    
    return ++$count;
}

counter(); // print 1
counter(); // print 2

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static](https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static)

## See Also
- [Static Variables and Methods](https://brainbell.com/php/static.html)
- [5 usages of static keyword in PHP](https://www.exakat.io/en/5-usages-of-static-keyword-in-php/)
- [PHP Static Variables](https://www.scaler.com/topics/static-variable-in-php/)
- [static $variable in PHP: a silent trap with Laravel Octane](https://medium.com/@arthurmonney/static-variable-in-php-a-silent-trap-with-laravel-octane-3a51013a0aa9)

## Related
- [Variables](/features/variable.md)
- [Variable Variables](/features/variable-variable.md)
- [Global Variables](/features/global-variable.md)
- [global Scope](/features/global.md)
- [$GLOBALS](/features/$globals.md)
- [Local Variable](/features/local-variable.md)
- [Superglobal Variables](/features/superglobal.md)
- [Static Property](/features/static-property.md)
- [New In Initializers](/features/new-in-initializer.md)

