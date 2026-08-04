# Coalesce Operator
The coalesce operator ``??`` returns its first operand if it is set and not NULL. Otherwise it will return its second operand. It was introduced in version 7.0 to replace the common but verbose ``isset($x) ? $x : $default`` pattern, while also silencing the notice that would normally be raised when reading an undefined variable, array key, or property.

The operator is chainable: ``$a ?? $b ?? $c`` evaluates left to right and returns the first operand that is set and not NULL, falling through to the last operand otherwise. Since PHP 7.4, it also has an assignment form, ``??=``, which assigns the right-hand value only if the left-hand variable is currently unset or NULL, making it convenient for lazily initializing defaults.

Because ``??`` only checks for NULL, it is not a general-purpose replacement for the ternary operator: falsy-but-non-NULL values such as ``0``, ``""``, or ``false`` are returned unchanged rather than replaced by the fallback.
```php
<?php

    class X { }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;

?>
```

## See Also

+ [Null Coalescing Operator (??)](https://riptutorial.com/php/example/7164/null-coalescing-operator-----)
+ [PHP ternary operator vs null coalescing operator](https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator)

Related : [Ternary Operator](Ternary Operator), [Colon](Colon), [If Then Else](If Then Else), [Short Ternary Operator](Short Ternary Operator), [Conditional Structures](Conditional Structures), [Double](Double), [Nullsafe](Nullsafe), [Question Mark ?](Question Mark ?), [Streamlining](Streamlining)
