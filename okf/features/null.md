---
type: "PHP Feature"
title: "Null"
description: "``null`` is a special data type that represents a variable with no value or an undefined value."
resource: "https://www.php.net/manual/en/language.types.null.php"
tags: ["literal", "value"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Null

``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object.

```php
<?php

    $a = null;
    $B = NULL;
    $c = \null;

    // same as  null|string $s 
    function foo(?string $s = null) {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.null.php](https://www.php.net/manual/en/language.types.null.php)

## See Also
- [Much ado about null](https://peakd.com/hive-168588/@crell/much-ado-about-null)
- [Null Hell and How to Get Out of It](https://afilina.com/null-hell)
- [Avoiding Unnecessary Null Checks](https://www.arhohuttunen.com/avoiding-unnecessary-null-checks/)

## Related
- [Nullable](/features/nullable.md)
- [Null Pattern](/features/nullpattern.md)
- [Authentication](/features/authentication.md)
- [Empty](/features/empty.md)
- [Overflow](/features/overflow.md)
- [Underflow](/features/underflow.md)
- [Void](/features/void.md)
- [Default Value](/features/default-value.md)
- [json_decode()](/features/json_decode.md)
- [Return Value](/features/return-value.md)
- [Value](/features/value.md)
- [Autovivification](/features/autovivification.md)
- [PHP Natives](/features/native-type.md)
- [Null Byte](/features/null-byte.md)
- [str_contains()](/features/str_contains.md)
- [Existence](/features/existence.md)
- [Standalone Types](/features/standalone-type.md)

