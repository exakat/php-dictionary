---
type: "PHP Feature"
title: "Use In Traits"
description: "``use`` imports a trait in the current structure, either another trait, a class or an enumeration."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["trait", "use"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Use In Traits

``use`` imports a trait in the current structure, either another trait, a class or an enumeration. 

``use`` is a keyword for traits and classes.

The import federates all the defined structures in both traits and classes: the methods, the properties and the constants. 

There may be naming conflicts between the imported traits and the host structure: the conflicts may be between an import and the host structure, or between two distinct imported traits.

In that case, there is a mechanism to resolve the conflicts: the ``insteadof`` keyword allows the host to choose between several competing implementations.

The ``as`` keyword is also available to create aliases from the import structures. These aliases shall not introduce new naming conflicts. It is not possible to use ``abstract`` as an alias when resolving names with traits.

```php
<?php

    trait T {
        function foo() {}
    }
    
    trait T2 {
        use T {
            T::foo as goo; // aliasing
            T::foo insteadof foo; // aliasing
            T2::foo as hoo; // aliasing
        }
        
        function foo() {}
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [Traits](https://www.php.net/manual/en/language.oop5.traits.php)

## Related
- [Abstract Keyword](/features/abstract.md)
- [Use](/features/use.md)
- [Trait](/features/trait.md)
- [Collision](/features/collision.md)
- [Method Collision](/features/method-collision.md)

