---
type: "concept"
title: "Duck Typing"
description: "In duck typing, an object is of a given type if it has all methods and properties required by that type."
resource: "https://en.wikipedia.org/wiki/Duck_typing"
tags: ["concept", "type", "animal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Duck Typing

In duck typing, an object is of a given type if it has all methods and properties required by that type. 

It is described by this sentence: 'If it walks like a duck and it quacks like a duck, then it must be a duck'.

This may apply to a class that offers a set of methods, that are listed in an interface, but the class doesn't implement explicitly that interface.

```php
<?php

    interface I {
        function foo() ; 
    }
    
    // class X doesn't implement i, yet it is of type i because it implements foo()
    class X {
        function foo() {}
        function bar() {}
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Duck_typing](https://en.wikipedia.org/wiki/Duck_typing)

## See Also
- [Duck Typing in PHP](https://matthiasnoback.nl/2017/02/convenient-ducktyping-in-php/)

## Related
- [Rubber Ducking Debugging](/features/rubber-ducking.md)

