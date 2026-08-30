---
type: "PHP Feature"
title: "Magic Property"
description: "Special properties, which are not declared, but dynamically handled by the magic methods."
resource: "https://www.php.net/manual/en/language.oop5.magic.php"
tags: ["class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Property

Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are: ``__get()``, ``__set()``, ``__isset()`` and ``__unset()``.

```php
<?php

class X {
    function __get($name) {
        return 'World!';
    }
}

$x = new X;
echo $x->hello; // display World!

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php](https://www.php.net/manual/en/language.oop5.magic.php)

## See Also
- [Overloading (__get, __set)](https://www.php.net/manual/en/language.oop5.overloading.php#object.get)
- [Magic Constants](https://www.php.net/manual/en/language.constants.magic.php)

## Related
- [__get() Method](/features/__get.md)
- [__set() Method](/features/__set.md)
- [__isset() Method](/features/__isset.md)
- [__unset() Method](/features/__unset.md)
- [Magic Constants](/features/magic-constant.md)
- [Magic](/features/magic.md)
- [Properties](/features/property.md)

