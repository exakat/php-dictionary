---
type: "PHP Feature"
title: "Local Scope"
description: "The local scope is the scope inside a function or method."
resource: "https://www.php.net/manual/en/language.variables.scope.php"
tags: ["php engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Local Scope

The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope.

```php
<?php

    function foo() {
        // $foo variable is only available in the foo scope
        $foo = 1; 
        
        $closure = function () {
            // this scope is different from foo()
            // its definition is nested in the foo() function
            // but those are 2 distinct scopes
        };
    }
    
    function goo() {
        // $goo variable is only available in the goo scope
        $goo = 1; 
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.scope.php](https://www.php.net/manual/en/language.variables.scope.php)

## See Also
- [Scope (Wikipedia)](https://en.wikipedia.org/wiki/Scope_(computer_science))
- [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

## Related
- [Scope](/features/scope.md)
- [global Scope](/features/global.md)

