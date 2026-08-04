# Tuple
A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``. Unlike an array or a list, a tuple's length and per-position types are fixed at compile time, and are checked by the type system.

Tuples are typically used for lightweight, unnamed grouping of a small number of related values, such as returning two values from a function without declaring a struct or class for the purpose.

PHP has no native, typed tuple. A plain indexed array can hold mixed values at fixed positions, and list assignment ``[$a, $b] = $pair;`` can destructure it, but the array's size and per-position types are not tracked or enforced anywhere; ``array{int, string, bool}`` shapes exist only as PHPDoc annotations understood by static analyzers, not by the engine.
```php
<?php

// Untyped and unchecked: any size, any types, at any position.
$pair = [1, 'a'];
[$number, $letter] = $pair;

?>
```

Related : [List](List), [Array, []](Array, []), [Record Type](Record Type), [Struct Type](Struct Type), [Multiple Return Values](Multiple Return Values)
