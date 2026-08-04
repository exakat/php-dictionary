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

Related : [Null](Null), [Boolean](Boolean), [integer](integer), [Floating Point Numbers](Floating Point Numbers), [String](String), [Array, []](Array, []), [Object](Object), [resource](resource), [Never Type](Never Type), [Void](Void), [Self](Self), [parent](parent), [static](static), [False](False), [True](True), [Callables](Callables), [Iterable](Iterable), [Stringable](Stringable)
