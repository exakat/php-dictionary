---
type: "type"
title: "Object"
description: "PHP includes a complete object model."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["type", "object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object

PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

``object`` is also a PHP type, which represent an object of any class.

```php
<?php

foreach([11,12,13] as $id => $value) {
    print "$id => $value\n";
}

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$i = 10;
while ($i <= 10) {
    echo $i++;  
}

$i = 10;
do {
    echo $i++;  
} while ($i <= 10);

$a = new A;
var_dump($a instanceof object);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [TYPE HINT ALL THE THINGS!](https://thecodingmachine.io/type-hint-all-the-things)

## Related
- [Visibility](/features/visibility.md)
- [Abstract Keyword](/features/abstract.md)
- [Final Keyword](/features/final.md)
- [Magic Methods](/features/magic-method.md)
- [Interface](/features/interface.md)
- [Clone](/features/clone.md)
- [Type System](/features/type.md)
- [Dereferencing](/features/dereferencing.md)
- [PHP Natives](/features/native-type.md)
- [Pseudo-type](/features/pseudo-type.md)
- [Special Types](/features/special-typehint.md)
- [Handle](/features/handle.md)
- [Identity](/features/identity.md)
- [instance](/features/instance.md)
- [instanceof](/features/instanceof.md)
- [is_a()](/features/is_a.md)
- [SplObjectStorage](/features/splobjectstorage.md)
- [SplStorageObjects](/features/splstorageobjects.md)
- [State](/features/state.md)

