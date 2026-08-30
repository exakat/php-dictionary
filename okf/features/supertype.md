---
type: "type"
title: "supertype"
description: "A supertype is any of the parent types."
resource: "https://en.wikipedia.org/wiki/Subtyping"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# supertype

A supertype is any of the parent types. It is the class that is extended, in a class definition, with the ``extends`` keyword; it also covers all the classes that are a supertype of that parent class. 

The opposite is subtype.

```php
<?php

    // Agrandparent is a supertype of AChild
    class Agrandparent {}
    
    // Aparent is a supertype of AChild
    class Aparent extends Agrandparent {}
    
    class Achild extends Aparent{}
    
    // These are not supertype of AChild
    class ABrother extends Aparent{}
    
    class ASister extends Aparent{}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Subtyping](https://en.wikipedia.org/wiki/Subtyping)

## See Also
- [Polymorphism (computer science)](https://en.wikipedia.org/wiki/Polymorphism_(computer_science))
- [Liskov substitution principle](https://en.wikipedia.org/wiki/Liskov_substitution_principle)

## Related
- [subtype](/features/subtype.md)

