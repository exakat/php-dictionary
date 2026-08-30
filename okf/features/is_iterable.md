---
type: "PHP Feature"
title: "is_iterable()"
description: "``is_iterable()`` is a PHP native function, introduced in version 7.1, that checks whether a variable can be iterated over with ``foreach``."
resource: "https://www.php.net/manual/en/function.is-iterable.php"
tags: ["function", "type-checking"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_iterable()

``is_iterable()`` is a PHP native function, introduced in version 7.1, that checks whether a variable can be iterated over with ``foreach``. It returns ``true`` if the value is either an ``array`` or an object implementing the ``Traversable`` interface, such as a ``Generator`` or an ``Iterator``.

``is_iterable()`` is the runtime counterpart of the ``iterable`` pseudo-type, which may be used in type declarations for parameters, return types, and properties. It is looser than ``is_array()``, since it also accepts objects, but it does not accept plain objects that merely implement ``ArrayAccess`` without also being ``Traversable``.

It is typically used to validate arguments of functions designed to accept both arrays and generators or iterators interchangeably, before looping over them with ``foreach``.

```php
<?php

    function process(iterable $items): void {
        foreach ($items as $item) {
            echo $item . PHP_EOL;
        }
    }

    var_dump(is_iterable([1, 2, 3]));           // true
    var_dump(is_iterable((function () { yield 1; })())); // true
    var_dump(is_iterable('hello'));             // false
    var_dump(is_iterable(new ArrayObject([1]))); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-iterable.php](https://www.php.net/manual/en/function.is-iterable.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [Iterable](/features/iterable.md)
- [Traversable](/features/traversable.md)
- [Iterator](/features/iterator.md)
- [Generator](/features/generator.md)
- [is_array()](/features/is_array.md)
- [is_object()](/features/is_object.md)
- [gettype()](/features/gettype.md)
- [Type Checking](/features/type-checking.md)

## Details
- PHP since: 7.1
- Extension: ext-standard

