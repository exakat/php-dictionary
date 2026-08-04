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

## See Also

+ [PHP 7 Scalar Type Declaration](https://www.etutorialspoint.com/index.php/tutorial/php-scalar-type-declaration)

Related : [Type System](Type System), [Special Types](Special Types), [String](String), [Boolean](Boolean), [Floating Point Numbers](Floating Point Numbers), [integer](integer), [Alias Types](Alias Types), [Constant Scalar Expression](Constant Scalar Expression), [Literal Types](Literal Types), [Primitive Obsession](Primitive Obsession), [Relative Types](Relative Types)
