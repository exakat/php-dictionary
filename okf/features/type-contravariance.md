---
type: "type"
title: "Contravariance"
description: "Contravariance allows a parameter type to be less specific in a child method, than that of its parent."
resource: "https://www.php.net/manual/en/language.oop5.variance.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Contravariance

Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

This means that a parameter ``$param`` in the method ``foo`` of the child class ``X`` can be a parent of the type in the method ``foo`` of the parent class. 

Less specific types can be: the same type ``W``, a parent class of the ``W`` type, here ``V``, an interface implemented by the type ``W``, a union type, such as ``W|string``. In particular, the type may become nullable. 

It cannot be a totally different type, an intersection type, such as ``W&A``, a different class that implements the same interface as ``W``, or a different scalar type.

```php
<?php

class V {}

class W extends V {
    // This method accepts an object compatible with w, but less specific
    function foo(W $param) { }
}

class X extends W {
    function foo(V $param) { }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.variance.php](https://www.php.net/manual/en/language.oop5.variance.php)

## See Also
- [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

## Related
- [Covariance](/features/type-covariance.md)
- [Nullable](/features/nullable.md)
- [Type Invariant](/features/invariant.md)
- [Liskov Substitution Principle (LSP)](/features/liskov.md)

## Details
- PHP since: 7.4+

