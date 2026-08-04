# Dereferencing
Dereferencing is the action to access a value, which is referenced with a pointer. Since PHP has no pointer, dereferencing applies to accessing an element in an array or an object. 

Dereferencing is also possible to function and methods calls: when a function returns an array or an object, it is possible to immediately access one of the element by using the array or method syntax.
```php
<?php

$array = ['a', 'b', 'c'];

echo $array['b'];

function foo() {
    return ['x', 'y', 'z'];
}

// Function Array Dereferencing
foo()[2]; // display z

?>
```

## See Also

+ [Function Array Dereferencing (FAD)](https://wiki.php.net/rfc/functionarraydereferencing)
+ [Array Dereferencing in PHP](https://xpertdeveloper.com/php-array-dereferencing/)
+ [Function Array Dereferencing in PHP (example 8)](https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax)

Related : [Functions](Functions), [Array, []](Array, []), [Object](Object), [Function Subscripting](Function Subscripting)
