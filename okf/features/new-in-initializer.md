---
type: "PHP Feature"
title: "New In Initializers"
description: "It is possible to use a new expression for default values of static variables, parameter and constants."
resource: "https://wiki.php.net/rfc/new_in_initializers"
tags: ["feature", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# New In Initializers

It is possible to use a new expression for default values of static variables, parameter and constants. 

It is not possible to use a new operator in a property definition. All elements of the instantiation must be constants, literal or constants or class constant, and available at calling time.

```php
<?php

    class B {
        function __construct(private int $i) {}
    }
    
    function headers($a = new B(3)) : B {
        return $a;
    }

?>
```

## Documentation
- [https://wiki.php.net/rfc/new_in_initializers](https://wiki.php.net/rfc/new_in_initializers)

## See Also
- [Initialize objects right into the constructor parameters in PHP 8.1](https://www.amitmerchant.com/initialize-objects-right-into-the-constructor-parameters-in-php-81/)

## Related
- [new](/features/new.md)
- [Static Variables](/features/static-variable.md)
- [Constants](/features/constant.md)
- [Static Constant](/features/class-constant.md)
- [Parameter](/features/parameter.md)

## Details
- PHP since: 8.1+

