---
type: "PHP Feature"
title: "Variable Shadowing"
description: "Variable shadowing is the confusion between variables of the same name, but of different context."
resource: "https://en.wikipedia.org/wiki/Variable_shadowing"
tags: ["variable", "bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Variable Shadowing

Variable shadowing is the confusion between variables of the same name, but of different context. 

Variable shadowing happens in different situations: 

+ With local variables, by defining it several times in the same context, and starting a new usage.
+ With local variables, by defining it once as parameter, once as local variable, once as blind variable in a ``foreach()``, these are 2 distinct situations
+ With static variables, after it was a local variable
+ With global variables, where a local variable and a global one carry the same name
+ With structures like ``foreach()`` and ``catch()``, which creates variables that actually overwrite existing ones, but are not perceived as such by a human coder

Such patterns sow confusion and lead to bugs. Given the context, the shadow may be intermittent: for example, a variable changes content and type only when an exception is caught.

```php
<?php

$x = 4;

function foo() {
    $x = 3;
    
    static $x; // No assignation, but $x is not NULL, on the first call
    
    global $x; // $x is not static anymore, and is 4

    $array = ['a', 'b', 'c'];
    try {
        foreach($array as $x) {
            echo $x;
        }
    } catch (Exception $x) {
        // $x becoms an exception, if it happens
    }
    
    // finally, $x becomes 5, stays global
    $x = 5;
}

foo();
echo $x;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Variable_shadowing](https://en.wikipedia.org/wiki/Variable_shadowing)

## See Also
- [The Hidden Bug in Go: Variable Shadowing Explained](https://dev.to/rijultp/the-hidden-bug-in-go-variable-shadowing-explained-4e6f)
- [Variable Shadowing in Python](https://www.geeksforgeeks.org/python/variable-shadowing-in-python/)

## Related
- [Variables](/features/variable.md)
- [Close Naming](/features/close-naming.md)

