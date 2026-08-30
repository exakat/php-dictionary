---
type: "type"
title: "Covariance"
description: "Covariance allows a child's method to return a more specific type than the return type of its parent's method."
resource: "https://www.php.net/manual/en/language.oop5.variance.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Covariance

Covariance allows a child's method to return a more specific type than the return type of its parent's method.

This means that the type of the return value in the method ``foo`` of the child class ``X`` can be a child of the type of the return value in the method ``foo`` of the parent class ``W``. 

Less specific types can be: the same type ``W``, a child class of the ``W`` type, here ``X``, an intersection type, such as ``W&Z``. In particular, the type may not become nullable.

It cannot be a totally different type, a union type, such as ``W|A``, any class that implements the same interfaces as ``W``, or a different scalar type.

```php
<?php

    class V {}
    
    class W extends V {
        function foo() : W { }
    }
    
    class X extends W {
        // This method returns an object compatible with w, but more specific
        function foo() : X { }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.variance.php](https://www.php.net/manual/en/language.oop5.variance.php)

## See Also
- [Type variance in PHP](https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html)
- [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

## Related
- [Contravariance](/features/type-contravariance.md)
- [Type Invariant](/features/invariant.md)
- [LSP](/features/lsp.md)
- [Return Type](/features/return-type.md)
- [Return](/features/return.md)
- [Liskov Substitution Principle (LSP)](/features/liskov.md)

## Details
- PHP since: 7.4+

