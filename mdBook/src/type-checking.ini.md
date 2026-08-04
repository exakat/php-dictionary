# Type Checking
Type checking is the process of verifying that the types of expressions, variables, arguments, and return values are consistent with their declarations and usage. It can take place before execution, as static type checking, or during execution, as runtime type checking, and the two complement each other.

Static type checking is performed by tools before the script ever runs. These tools rely on type inference to deduce the type of every expression, then compare those inferred types against declared signatures and usage. Because PHP does not natively support generics, static checkers extend the language with PHPDoc-style ``@template`` annotations that let a single class or function describe type-safe behaviour for multiple element types; those annotations exist only for the checker and are fully erased at runtime.

Runtime type checking is enforced by the PHP engine at the moment a typed boundary is crossed: when a function is called, when a value is assigned to a typed property, or when a function returns. In strict mode, ``declare(strict_types=1)``, PHP rejects values that do not match the declared type instead of coercing them, throwing a ``TypeError``. Explicit guards such as ``is_string()``, ``instanceof``, or ``assert()`` are also runtime checks that programmers add themselves.

The two phases sit at different points in the order of execution: static analysis happens entirely before the script starts, while runtime enforcement happens progressively as each statement executes. A type error caught statically prevents a whole class of bugs from ever reaching production; a runtime error caught by PHP's engine surfaces only when the relevant code path is actually reached.

```php
<?php

    declare(strict_types=1);

    // Static type checking that verifies this signature is used correctly
    // Runtime type checking: PHP rejects a non-string argument at call time
    function shout(string $message): string {
        return strtoupper($message);
    }

    // PHPDoc generics: @template T informs static checkers; erased at runtime
    /**
     * @template T
     * @param T $value
     * @return T
     */
    function identity(mixed $value): mixed {
        return $value;
    }

    // Explicit runtime check narrows the type for both static and runtime phases
    function process(mixed $value): string {
        if (!is_string($value)) {
            throw new \TypeError('Expected string');
        }
        // inferred as string from here by static checkers AND enforced at runtime
        return strtoupper($value);
    }

?>
```

## See Also

+ [PHP RFC: Scalar Type Declarations](https://wiki.php.net/rfc/scalar_type_hints_v5)
+ [PHPStan – Understanding Types](https://phpstan.org/writing-php-code/phpdoc-types)
+ [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)
+ [Runtime type checking is great](https://blog.jez.io/runtime-type-checking/)

Related : [Type Inference](Type Inference), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [Runtime Checks](Runtime Checks), [Gradual Type Checking](Gradual Type Checking), [Generics](Generics), [Types Erasure](Types Erasure), [Order Of Execution](Order Of Execution), [strict_types](strict_types), [Type System](Type System), [TypeError](TypeError), [Type Juggling](Type Juggling), [Type Coverage](Type Coverage), [instanceof](instanceof), [is_a()](is_a()), [Array Shape](Array Shape), [Nominal Type](Nominal Type), [Phantom Type](Phantom Type), [Refinement Type](Refinement Type), [Strict](Strict), [Structural Typing](Structural Typing), [Type Narrowing](Type Narrowing), [Type Coercion](Type Coercion), [gettype()](gettype()), [is_array()](is_array()), [is_bool()](is_bool()), [is_int()](is_int()), [is_iterable()](is_iterable()), [is_string()](is_string())
