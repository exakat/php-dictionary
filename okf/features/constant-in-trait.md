---
type: "PHP Feature"
title: "Constants In Trait"
description: "Constants were added to trait in version 8.3."
resource: "https://www.php.net/manual/en/language.oop5.traits.php"
tags: ["constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constants In Trait

Constants were added to trait in version 8.3. Before that, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own constants, but higher precedence than the host parent's constants.

It is not possible to call a trait constant directly via its trait's name: this has to be done via the host class.

```php
<?php

    trait T {
        private const A = 1;
    }
    
    class X {
        use T;
    }
    
    echo A::T;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.traits.php](https://www.php.net/manual/en/language.oop5.traits.php)

## See Also
- [PHP RFC: Constants in Traits](https://wiki.php.net/rfc/constants_in_traits)
- [PHP: Class Constants](https://www.php.net/manual/en/language.oop5.constants.php)

## Related
- [Trait](/features/trait.md)
- [Static Constant](/features/class-constant.md)

