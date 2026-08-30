---
type: "PHP Feature"
title: "Pseudo-type"
description: "A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type."
resource: "https://www.php.net/manual/en/language.types.declarations.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pseudo-type

A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type. 

For example, ``iterable`` represents both ``array`` and ``Traversable`` objects, yet a variable cannot be both, not be instantiated as such.

Union type, DNF or intersectional types are not pseudo-types, as they are made of multiple keywords.

There are several pseudo-type: ``mixed``, ``callable``, ``object``, ``iterable``.

```php
<?php

function foo(iterable $a) { }

foo([]); // OK
foo(new ArrayIterator([1])); // OK
foo(1); // KO

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php](https://www.php.net/manual/en/language.types.declarations.php)

## See Also
- [Stop using Pseudo-Types](https://f2r.github.io/en/stop-using-pseudo-types.html)
- [New mixed pseudo type - PHP 8.0](https://php.watch/versions/8.0/mixed-type)

## Related
- [Mixed](/features/mixed.md)
- [Iterable](/features/iterable.md)
- [Callables](/features/callable.md)
- [Object](/features/object.md)
- [Type System](/features/type.md)

