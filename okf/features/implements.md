---
type: "keyword"
title: "implements"
description: "``implements`` is a keyword, dedicated to classes."
resource: "https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements"
tags: ["class", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# implements

``implements`` is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, ``instanceof``, and ``is_a()``.

The list of implemented interfaces is accessible with the ``class_implements()`` function.

```php
<?php

    interface I {
        function fooi() ;
    }
    
    // empty interface 
    interface J { }
    
    class X implements I, J {
        private $property;
        
        public function fooi() {
            return 1;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements](https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements)

## See Also
- [PHP Interfaces: How to Implement and Use Them](https://medium.com/@andreibirta95/php-interfaces-how-to-implement-and-use-them-58c8b0648480)

## Related
- [Class](/features/class.md)
- [Class Getter Method](/features/getter.md)
- [extends](/features/extends.md)
- [class_implements()](/features/class_implements.md)

## Details
- PHP since: 5.0+

