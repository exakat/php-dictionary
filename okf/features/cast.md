---
type: "PHP Feature"
title: "Cast Operator"
description: "Cast operators change the type of the variable to the desired type."
resource: "https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting"
tags: ["feature", "syntax", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cast Operator

Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

+ ``(int)``, ``(integer)``: cast to integer
+ ``(bool)``, ``(boolean)``: cast to boolean
+ ``(float)``, ``(double)``: cast to float
+ ``(string)``: cast to string
+ ``(array)``: cast to array
+ ``(object)``: cast to object, of type ``stdClass``. There is no operator to convert to a specific class type.
+ ``(void)``: complement operator to the ``NoDiscard`` attribute. It is not really a cast operator.
+ ``(unset)``: cast to NULL, deprecated since PHP 7.2
+ ``(real)``: cast to float.

```php
<?php

    $foo = 10;               // $foo is an integer
    $bar = (boolean) $foo;   // $bar is a boolean

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting](https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting)

## See Also
- [A detailed look into PHP type casting](https://dev.to/altsyset/a-detailed-look-into-php-type-casting-4m6d)
- [Mastering Data Type Conversion In Php Through Type Casting](https://laranepal.com/blog/mastering-data-type-conversion-in-php-through-type-casting)
- [Conversions](https://phplang.org/spec/08-conversions.html)
- [Mastering the (array) cast](https://www.exakat.io/mastering-the-array-cast-operator-in-php-a-comprehensive-guide/)

## Related
- [__toString() Method](/features/__tostring.md)
- [Type Juggling](/features/type-juggling.md)
- [ArrayObject](/features/arrayobject.md)
- [Convert](/features/convert.md)
- [Non-numeric](/features/non-numeric.md)
- [Sign](/features/sign.md)
- [array_keys()](/features/array_keys.md)
- [Boolean](/features/boolean.md)
- [Golf](/features/golf.md)
- [Number](/features/number.md)
- [Canonical](/features/canonical.md)
- [get_object_vars()](/features/get_object_vars.md)

