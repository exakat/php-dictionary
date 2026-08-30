---
type: "type"
title: "subtype"
description: "A subtype is any of the child types."
resource: "https://en.wikipedia.org/wiki/Subtyping"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# subtype

A subtype is any of the child types. It is the classes that extend the target class, with the ``extends`` keyword; it also covers all the classes that are subtypes of that child class. 

The opposite is supertype.

```php
<?php

    // Aparent is a supertype of AChild
    class Aparent extends Agrandparent {}
    
    class Achild extends Aparent{}
    
    // Agrandchild is a subtype of AChild
    class Agrandchild extends Achild {}
    
    // These are not subtype of AChild
    class ABrother extends Aparent{}
    
    class ASister extends Aparent{}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Subtyping](https://en.wikipedia.org/wiki/Subtyping)

## See Also
- [Liskov substitution principle](https://en.wikipedia.org/wiki/Liskov_substitution_principle)
- [Covariance and contravariance](https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science))

## Related
- [supertype](/features/supertype.md)

