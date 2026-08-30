---
type: "concept"
title: "Declaration"
description: "A declaration is a statement that defines a structure, such as a function, a class, method, property, etc."
resource: "https://www.php.net/manual/en/language.variables.basics.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Declaration

A declaration is a statement that defines a structure, such as a function, a class, method, property, etc. A declaration must occur before the usage of the declared resource.

PHP requires a declaration for some structures, and allows its omission for others. For example, a class must be declared before usage, while a variable can be used without declaration. Properties are currently being moved to a compulsory declaration.

```php
<?php

// cannot call a function before defining it
foo();

function foo() {}

class x {
    function goo() {
        // This is a warning since PHP 8.2, planned to be a fatal error in PHP 9.0
        $this->undeclaredProperty = 1;
        
        // $b is undefined. It creates a warning, but the code keeps executing.
        $a = $b + 1;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.basics.php](https://www.php.net/manual/en/language.variables.basics.php)

## See Also
- [Difference between Definition and Declaration](https://www.geeksforgeeks.org/compiler-design/difference-between-definition-and-declaration/)

## Related
- [Definition](/features/definition.md)

