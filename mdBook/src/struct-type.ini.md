# Struct Type
A struct is a value type that groups named fields together, as in C, Go, Rust, or Swift. Unlike a class instance in most object-oriented languages, a struct value is typically copied by value on assignment or when passed to a function, is allocated inline rather than behind a pointer, and carries no built-in identity or inheritance: two structs are simply equal when their fields are equal.

Structs are commonly used for small, self-contained data, such as a 2D point or an RGB color, where the overhead of heap allocation and reference semantics would be wasted.

PHP has no struct type. Every ``class`` instance is a heap-allocated object with reference semantics: assigning an object to a new variable, or passing it to a function, copies the reference, not the object's contents, so mutations through one variable are visible through the other. A PHP ``class`` can imitate the field-grouping role of a struct, but not its value semantics; achieving copy-on-assign behavior requires implementing ``__clone()`` and calling it manually, or declaring the class ``readonly``.

The closest notion ofa struct type is ``stdClass`` which is an empty class, with dynamic typeless properties, which may be populated at will, or an ``array``: both notions are actually accessible to the other with casting. 

```php
<?php

    class Point {
        public function __construct(public float $x, public float $y) {}
    }
    
    $a = new Point(1.0, 2.0);
    $b = $a;      // copies the reference, not the object
    $b->x = 99.0; // also changes $a->x: PHP objects have reference semantics

?>
```

## See Also

+ [Record in Wikipedia](https://en.wikipedia.org/wiki/Record_(computer_science))

Related : [Class](Class), [Record Type](Record Type), [Value Type](Value Type), [__clone() Method](__clone() Method), [Readonly](Readonly)
