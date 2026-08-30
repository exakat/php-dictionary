---
type: "keyword"
title: "Global Variables"
description: "Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword."
resource: "https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static"
tags: ["keyword", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Global Variables

Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword.

To become a global variable, a variable may use one of the following ways: 

+ Be declared as such with the ``global`` keyword
+ Be created in the ``$GLOBALS`` variable, which is a global variable itself
+ Be created outside any function, method, closure
+ Be a super-global

Global variables provide a way to share data in different and remote scopes. They also provide a way for data to be modified by another part of the code, without warning.

```php
<?php

    global $count;
    $count = 0;
    
    function counter() {
        global $count;
        
        // no return here
        ++$count;
    }
    
    counter(); 
    echo $count; // print 1
    counter(); 
    echo $count; // print 2

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static](https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static)

## See Also
- [How to Declare a Global Variable in PHP?](https://www.geeksforgeeks.org/php/how-to-declare-a-global-variable-in-php/)
- [PHP Variable Scope Explained: Globals, Superglobals, and Best Practices](https://blog.servermania.com/server-manias-complete-guide-to-global-variables-in-php)

## Related
- [Variables](/features/variable.md)
- [Static Variables](/features/static-variable.md)
- [Variable Variables](/features/variable-variable.md)
- [$GLOBALS](/features/$globals.md)
- [global Scope](/features/global.md)
- [Superglobal Variables](/features/superglobal.md)
- [Distributed State](/features/distributed-state.md)
- [Hidden State](/features/hidden-state.md)
- [Implicit State](/features/implicit-state.md)
- [Legacy](/features/legacy.md)
- [Local Variable](/features/local-variable.md)

## Details
- Packagist: [sebastian/global-state](https://packagist.org/packages/sebastian/global-state)

