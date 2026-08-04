# Streamlining
Streamlining refers to the practice of simplifying code to reduce complexity, remove redundancy, and improve readability and maintainability.

Streamlining often involves replacing verbose constructs with more expressive modern syntax: match expressions instead of switch, arrow functions instead of closures, named arguments to clarify intent, nullsafe operators to flatten nested null checks, and short-circuit assignments with ``??=``.

Streamlining is distinct from premature optimization: it targets structural and expressive clarity rather than micro-level performance, and its effect is measured by reduced cognitive load for the reader.
```php
<?php

    // Before streamlining
    if ($value === null) {
        $value = computeDefault();
    }

    // After
    $value ??= computeDefault();

?>
```

## See Also

+ [PHP 8: before and after](https://stitcher.io/blog/php-8-before-and-after)
+ [Shorthand Comparisons in PHP](https://stitcher.io/blog/shorthand-comparisons-in-php)
+ [Refactoring PHP Code for Better Readability](https://deliciousbrains.com/refactoring-php-code-better-readability/)

Related : [Match](Match), [Arrow Functions](Arrow Functions), [Named Parameters](Named Parameters), [Nullsafe](Nullsafe), [Coalesce Operator](Coalesce Operator), [Cognitive Complexity](Cognitive Complexity), [Refactoring](Refactoring), [Clean Code](Clean Code), [Readability](Readability), [Inlining](Inlining)
