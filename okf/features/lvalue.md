---
type: "concept"
title: "Lvalue"
description: "An lvalue is an expression that designates a storage location capable of holding a value, as opposed to an rvalue, which only produces a value."
resource: "https://phplang.org/spec/03-terms-and-definitions.html"
tags: ["concept", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lvalue

An lvalue is an expression that designates a storage location capable of holding a value, as opposed to an rvalue, which only produces a value. The name comes from ``left value``: historically, the kind of expression allowed on the left-hand side of an assignment.

An lvalue may be modifiable or non-modifiable. A modifiable lvalue, such as a variable, an array element or an object property, can be the target of an assignment or of a by-reference operation. A non-modifiable lvalue, such as a class constant or the result of a function returned by value, designates a location whose value cannot be changed through that expression.

```php
<?php

    $a = 1;      // $a is a modifiable lvalue
    $arr[0] = 2; // $arr[0] is a modifiable lvalue
    
    class C {
        const X = 1;
    }
    
    // C::X is a non-modifiable lvalue: this is a compile-time error
    // C::X = 2;

?>
```

## Documentation
- [https://phplang.org/spec/03-terms-and-definitions.html](https://phplang.org/spec/03-terms-and-definitions.html)

## See Also
- [Value (computer science): lvalue and rvalue - Wikipedia](https://en.wikipedia.org/wiki/Value_(computer_science)#lvalue_and_rvalue)

## Related
- [Variables](/features/variable.md)
- [Assignment](/features/assignment.md)
- [References](/features/reference.md)
- [Value](/features/value.md)
- [Const](/features/const.md)

