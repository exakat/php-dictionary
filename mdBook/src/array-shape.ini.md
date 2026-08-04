# Array Shape
An array shape is a type annotation that describes an array by its exact set of keys and the type of the value stored under each one, instead of describing it only by the type of its elements in general. ``array{name: string, age: int}`` denotes an array that has a ``name`` key holding a ``string`` and an ``age`` key holding an ``int``, as opposed to the coarser ``array<string, int|string>``, which only says the array maps strings to a mix of ints and strings without tying any particular key to any particular type.

Array shapes are a PHPDoc annotation, written in a ``@param``, ``@return``, or ``@var`` docblock tag. They can mark optional keys with a trailing ``?``, allow additional unlisted keys with ``...``, and can be nested to describe arrays of arrays. They are the array analogue of row polymorphism / open record types found natively in languages such as TypeScript or OCaml.

PHP's engine has no notion of array shape: an ``array`` type declaration accepts any array regardless of which keys it holds or what is stored under them, and nothing is checked at runtime about individual keys. Array shapes exist purely as a static-analysis annotation, verified by tools at analysis time; the PHP runtime performs no corresponding check, so a function documented with an array shape still receives whatever array is actually passed, keys missing or not.
```php
<?php

    /**
     * @param array{name: string, age: int, email?: string} $user
     */
    function greet(array $user): string {
        // PHPStan/Psalm know $user['name'] is a string and $user['age'] an int;
        // the PHP engine enforces none of this at runtime.
        $greeting = 'Hello, ' . $user['name'];
    
        if (isset($user['email'])) {
            $greeting .= ' (' . $user['email'] . ')';
        }
    
        return $greeting;
    }
    
    // Nothing stops this call at runtime, even though the shape is violated.
    greet(['name' => 'Ada']);

?>
```

## See Also

+ [Psalm array types](https://psalm.dev/docs/annotating_code/type_syntax/array_types/#array-shapes)

Related : [Row Polymorphism](Row Polymorphism), [Type System](Type System), [Type Checking](Type Checking), [Generics](Generics), [Gradual Type Checking](Gradual Type Checking), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [Structural Typing](Structural Typing)
