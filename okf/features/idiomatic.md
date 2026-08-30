---
type: "concept"
title: "Idiomatic"
description: "Idiomatic code follows the conventions and constructs that are natural to a specific language, rather than code that merely compiles or runs correctly."
resource: "https://www.php-fig.org/psr/psr-12/"
tags: ["concept", "convention"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Idiomatic

Idiomatic code follows the conventions and constructs that are natural to a specific language, rather than code that merely compiles or runs correctly. Idiomatic PHP favors the features and patterns that the language and its ecosystem consider normal, readable and maintainable, over literal translations of patterns from other languages.

Writing idiomatic PHP means picking the tool the language actually offers for a given problem: a ``foreach`` loop instead of manual index bookkeeping, ``??`` instead of ``isset()`` ternaries, typed properties instead of ad-hoc docblocks. Non-idiomatic code often signals that the author is more familiar with another language, or that the codebase has not kept up with the evolution of PHP.

A short list of idiomatic PHP features:

+ ``foreach`` to iterate arrays and ``Traversable``, rather than indexed ``for`` loops;
+ Null coalescing operator ``??`` and null coalescing assignment ``??=``, rather than ``isset()`` combined with a ternary;
+ Nullsafe operator ``?->`` to chain calls on a possibly null object;
+ Arrow functions ``fn() => ...`` for short closures that capture the outer scope implicitly;
+ Spread operator ``...`` to unpack arrays into arguments, and variadic parameters to collect them;
+ Named arguments to make call sites self-documenting and to skip optional parameters;
+ Typed properties, constructor property promotion and readonly properties, rather than untyped properties documented only in a docblock;
+ Enums, rather than class constants used to emulate a closed set of values;
+ Match expressions, rather than ``switch`` with fallthrough or repeated ``break``;
+ Interfaces and first-class callable syntax, rather than string or array callables;
+ Exceptions for error handling, rather than mixed return values or error codes;
+ PSR autoloading and Composer, rather than manual ``require``/``include`` chains.

What counts as idiomatic changes with each PHP version: a construct that was idiomatic in version 5 may be superseded once a more direct language feature is introduced.

```php
<?php

    // Not idiomatic: manual index, isset()+ternary, switch with breaks
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        $name = isset($user['name']) ? $user['name'] : 'Anonymous';

        switch ($user['role']) {
            case 'admin':
                $label = 'Administrator';
                break;
            case 'editor':
                $label = 'Editor';
                break;
            default:
                $label = 'Guest';
        }
    }

    // Idiomatic PHP: foreach, ??, match
    foreach ($users as $user) {
        $name = $user['name'] ?? 'Anonymous';

        $label = match ($user['role']) {
            'admin'  => 'Administrator',
            'editor' => 'Editor',
            default  => 'Guest',
        };
    }

?>
```

## Documentation
- [https://www.php-fig.org/psr/psr-12/](https://www.php-fig.org/psr/psr-12/)

## See Also
- [What does 'idiomatic' mean in programming?](https://en.wikipedia.org/wiki/Programming_idiom)

## Related
- [Best Practices](/features/best-practice.md)
- [Coding Conventions](/features/coding-convention.md)
- [Convention](/features/convention.md)
- [Readable](/features/readable.md)
- [Match](/features/match.md)
- [Coalesce Operator](/features/coalesce.md)
- [Arrow Functions](/features/arrow-function.md)
- [Named Parameters](/features/named-parameter.md)
- [Enumeration (enum)](/features/enum.md)

