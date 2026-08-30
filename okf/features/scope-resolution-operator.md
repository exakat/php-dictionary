---
type: "folklore"
title: "Scope Resolution Operator ::"
description: "The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["feature", "operator", "surprise", "folklore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Scope Resolution Operator ::

The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function ``get_class()``. The operator is more modern and faster. 

The double colon operator is used to access class related elements, such as 

+ Static properties, ``X::$property``
+ Static methods, ``X::method()``
+ Static constants, ``X::CONSTANT``
+ Class name, ``X::class``

This operator is often called double-colon, or ``paamayim-nekudotayim``: this means ``double-colon`` in Hebrew. It is said to be a lot easier to google than ``::``.

PHP also has a single colon operator ``:``, used for goto labels, ternary operator, etc.

```php
<?php

$a = new stdClass();

echo $a::class;

// identical to 
echo get_class($a);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [Scope Resolution operator in PHP](https://www.geeksforgeeks.org/php/scope-resolution-operator-in-php/)
- [Scope Resolution operator (in PHP)](https://parsifar.com/scope-resolution-operator-in-php/)

## Related
- [Object Operator ->](/features/object-operator.md)
- [Object Nullsafe Operator ?->](/features/object-nullsafe-operator.md)
- [Static Method](/features/static-method.md)
- [Static Class](/features/static-class.md)
- [Static Property](/features/static-property.md)
- [Colon](/features/colon.md)
- [Double](/features/double.md)
- [Null Safe Object Operator](/features/nullsafe-object-operator.md)

