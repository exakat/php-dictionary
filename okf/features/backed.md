---
type: "concept"
title: "Backed"
description: "A backed structure has several meanings: + Backed enumeration: an enumeration that has an integer or string value + Backed property: a property with a hook, that actually stores the value in the property."
resource: "https://www.php.net/manual/en/language.enumerations.backed.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backed

A backed structure has several meanings: 

+ Backed enumeration: an enumeration that has an integer or string value
+ Backed property: a property with a hook, that actually stores the value in the property.

```php
<?php

    enum E : int {
        case A = 1;
    }
    
    class X {
        private $p { get => $this->p;}
    }
    
?>
```

## Documentation
- [https://www.php.net/manual/en/language.enumerations.backed.php](https://www.php.net/manual/en/language.enumerations.backed.php)

## See Also
- [PHP enums: backed vs unit enums with examples](https://benjamincrozat.com/php-enums)
- [What Are Backed Enums in PHP?](https://www.designcise.com/web/tutorial/what-are-backed-enums-in-php)

## Related
- [Backed Enum](/features/backed-enum.md)
- [Backed Property](/features/backed-property.md)

