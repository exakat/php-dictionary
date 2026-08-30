---
type: "type"
title: "Scalar Types"
description: "Scalar types refer to the basic data types that hold a single value."
resource: "https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Scalar Types

Scalar types refer to the basic data types that hold a single value. 

PHP scalar types include the following:

Integer ``int``: integers are whole numbers without decimal points. 

Float ``float``: floats, also known as floating-point numbers or doubles, represent decimal numbers. 

String  ``string``: strings are sequences of characters enclosed in quotes, single or double.

Boolean  ``bool``: booleans have two possible values: true or false. 

Note that ``null`` is not considered a scalar type, and often behaves differently.

```php
<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield)

## See Also
- [PHP 7 Scalar Type Declaration](https://www.etutorialspoint.com/index.php/tutorial/php-scalar-type-declaration)

## Related
- [Type System](/features/type.md)
- [String](/features/string.md)
- [Boolean](/features/boolean.md)
- [Floating Point Numbers](/features/float.md)
- [integer](/features/integer.md)
- [Alias Types](/features/alias-types.md)
- [Constant Scalar Expression](/features/constant-scalar-expression.md)
- [Literal Types](/features/literal-types.md)
- [Primitive Obsession](/features/primitive-obsession.md)
- [Relative Types](/features/relative-types.md)

## Details
- PHP since: 7.0

