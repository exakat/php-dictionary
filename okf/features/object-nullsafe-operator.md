---
type: "PHP Feature"
title: "Object Nullsafe Operator ?->"
description: "The object nullsafe operator is an operator which gives access to properties and methods of an object."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Nullsafe Operator ?->

The object nullsafe operator is an operator which gives access to properties and methods of an object.

Depending on the context, those properties and methods must be public or protected.

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.

```php
<?php

    $array = ['a' => (new stdClass)?->a, ];
    
    // displays 1
    echo $array['a']?->a;
    
    // displays null, so nothing
    echo $array['b']?->a;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [Object Operator in PHP](https://www.delftstack.com/howto/php/php-object-operator/)

## Related
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Object Operator ->](/features/object-operator.md)

