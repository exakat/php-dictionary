# Type Inference
Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration.

PHP itself does not infer types for local variables: their type can only be declared on function arguments, return values, properties, and constants. However, static analyzers perform type inference by tracking assignments, control-flow branches, and function signatures to determine what type a value holds at every point in the code.

Type inference enables early detection of type errors even in partially or untyped code. It is the engine behind gradual type checking: the tool fills the gaps left by missing annotations. PHPDoc blocks, ``@var``, ``@param``, ``@return``, are additional hints that guide inference when the code alone is ambiguous.

A classic example is narrowing: after an ``is_string()`` guard, the analyzer infers that the variable is a ``string`` inside the if-branch, removing false-positive warnings.

```php
<?php

    function process(mixed $value): string {
        if (is_string($value)) {
            // type inferred as string here
            return strtoupper($value);
        }
        // type inferred as int|float|bool|array|object|null here
        return (string) $value;
    }

?>
```

## See Also

+ [Type Inference in PHP using Deep Learning](https://lup.lub.lu.se/luur/download?func=downloadFile&recordOId=9021447&fileOId=9021453)
+ [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)
+ [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
+ [Type inference for PHP](https://homepages.cwi.nl/~jurgenv/theses/RuudVanDerWeijde.pdf)

Related : [Type System](Type System), [Type Juggling](Type Juggling), [Type Checking](Type Checking), [Gradual Type Checking](Gradual Type Checking), [Type Coverage](Type Coverage), [Dependent Type](Dependent Type), [Static Expression](Static Expression), [Union Type](Union Type), [Mixed](Mixed), [PHPdoc](PHPdoc), [Autocompletion](Autocompletion)
