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

Related : [Mixed](Mixed), [Iterable](Iterable), [Callables](Callables), [Object](Object), [Type System](Type System)
