---
type: "PHP Feature"
title: "instance"
description: "An instance is an object of a class."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new"
tags: ["object", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# instance

An instance is an object of a class. The class provides the definitions of the behavior of that object, while the object holds the specific data, that makes it unique and distinguishable. 

The creation of an instance, called instantiation, is done with the ``new`` keyword.

```php
<?php

    class X {
        private int $property;
        
        function __construct(int $arg) {
            $this->propety = $arg;
        }
    }
    
    $object = new X(2);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new)

## See Also
- [Instance (computer science) (Wikipedia)](https://en.wikipedia.org/wiki/Instance_(computer_science))
- [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)

## Related
- [Class](/features/class.md)
- [Object](/features/object.md)
- [new](/features/new.md)
- [Constructor](/features/constructor.md)
- [Non-instantiable](/features/non-instantiable.md)
- [Reflection](/features/reflection.md)

