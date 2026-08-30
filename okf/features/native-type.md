---
type: "type"
title: "PHP Natives"
description: "PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name."
resource: "https://www.php.net/manual/en/language.types.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Natives

PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name. They cover cases that are not object related, or not even data related.

+ null
+ bool
+ int
+ float
+ string
+ array
+ object
+ resource
+ never
+ void
+ self
+ parent
+ static
+ false
+ true
+ callable
+ iterable
+ stringable.

Natives fall into two broad groups. Scalar and compound types: ``null``, ``bool``, ``int``, ``float``, ``string``, ``array``, ``object``, ``resource``, which describe the shape of a value; Pseudo-types and contextual types, such as ``never``, ``void``, ``self``, ``parent``, ``static``, ``false``, ``true``, ``callable``, ``iterable``, ``stringable``, which are mostly meaningful in type declarations and don't correspond to a single concrete kind of value: ``self`` and ``static`` refer to the enclosing or called class, ``callable`` and ``iterable`` describe a capability rather than a structure, and ``never``/``void`` describe what a function does not return.

Since PHP 7.0, most of these names can be used as parameter and return type declarations, and PHP 8.0 added support for union types, allowing a single declaration such as ``int|string`` to accept more than one native type. Because these are reserved words tied directly to the engine's type system, they cannot be reused as class or interface names.

```php
<?php

    function foo(int $i, callable $c) : never {
        die();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.php](https://www.php.net/manual/en/language.types.php)

## See Also
- [PHP: rfc:scalar-pseudo-type](https://wiki.php.net/rfc/scalar-pseudo-type)
- [PHP Data Types - PHP Tutorial](https://www.phptutorial.net/php-tutorial/php-data-types/)

## Related
- [Null](/features/null.md)
- [Floating Point Numbers](/features/float.md)
- [String](/features/string.md)
- [Array, []](/features/array.md)
- [Object](/features/object.md)
- [resource](/features/resource.md)
- [Never Type](/features/never.md)
- [Void](/features/void.md)
- [Self](/features/self.md)
- [parent](/features/parent.md)
- [static](/features/static.md)
- [False](/features/false.md)
- [True](/features/true.md)
- [Callables](/features/callable.md)
- [Iterable](/features/iterable.md)
- [Stringable](/features/stringable.md)

