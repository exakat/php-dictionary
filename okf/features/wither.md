---
type: "concept"
title: "Class Wither Method"
description: "``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself."
resource: "https://projectlombok.org/features/With"
tags: ["concept", "rfc", "method types"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Wither Method

``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself. The ``with`` prefix may be added to any property name, virtual or concrete.

```php
<?php

class x {
    private A $property;
    
    // getter
    public function getProperty() : A {
        return $this->property;
    }

    // wither
    public function withProperty() : A{
        return clone $this->property;
    }
}

?>
```

## Documentation
- [https://projectlombok.org/features/With](https://projectlombok.org/features/With)

## See Also
- [RFC: Accessors](https://wiki.php.net/rfc/property_accessors)

## Related
- [Class](/features/class.md)
- [Class Setter Method](/features/setter.md)
- [Class Getter Method](/features/getter.md)
- [Immutable](/features/immutable.md)

