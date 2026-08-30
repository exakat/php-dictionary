---
type: "acronym"
title: "Class Interface Trait Enumeration (CITE)"
description: "CITE stands for Class Interface Trait Enumeration."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Interface Trait Enumeration (CITE)

CITE stands for Class Interface Trait Enumeration. It represents all four types of PHP structures, also called classlike structures, when they interact together.

In particular, all four of them share the same namespaces, which may create naming conflicts. This is unlike functions and constants, which both have their own namespaces.

```php
<?php

    class C {}
    
    interface I {}
    
    trait T {}
    
    enum E {}
    
    const C = 1;
    function C() {} 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [Object Interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php)
- [Enumerations](https://www.php.net/manual/en/language.enumerations.php)

## Related
- [Class](/features/class.md)
- [Trait](/features/trait.md)
- [Interface](/features/interface.md)
- [Enumeration (enum)](/features/enum.md)

