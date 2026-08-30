---
type: "concept"
title: "Scope"
description: "The scope, also called context, is the space in which a certain elements are defined."
resource: "https://www.php.net/manual/en/language.variables.scope.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Scope

The scope, also called context, is the space in which a certain elements are defined. There are function, closure or method scope, for local variables; methods are also defined in a class scope.

A variable scope is usually its host method, or the file in which is used. It also extends to any included files, and skips other method definition.  

Arrow functions are initialised with the same scope than the defining scope, but do not write back in it. Closure with the use keyword also import variables from the defining scope. 

Scopes are generally considered as global or local.

```php
<?php

    // $a is defined in the file scope
    $a = 1; 
    
    // $a is extended to the included scope
    include 'b.php';
    
    // arrow functions use the same scope than the defining code. 
    // here, $a is also defined there. 
    // $c will not be available in the calling scope.
    $c = fn () => $a + ($c = 2);
    
    function foo() {
        // $b is only defined in the foo() function
        echo $b; 
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.scope.php](https://www.php.net/manual/en/language.variables.scope.php)

## See Also
- [Understanding scope in PHP](https://marcor.substack.com/p/understanding-scope-in-php)

## Related
- [Local Scope](/features/local.md)
- [global Scope](/features/global.md)

