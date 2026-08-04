# Pattern Matching
Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables. In a sense it serves a similar purpose for complex data structures as regular expressions do for strings.
```php
<?php

    // This code is extracted from the RFC
    // It is not valid PHP code, as of PHP 8.4. 
    
    // The \is\ keyword evaluates to a boolean.
    if ($var is <pattern>) {
      // Do stuff
    }
     
    // Basic type matching
    $var is string;
    $var is int|float;
    $var is ?array;
    $var is (Account&Authenticated)|User;
    $var is mixed; // Matches anything, effectively a wildcard.
     
    // Literal patterns
    $var is \foo\;
    $var is 5;
    $var is 3|5|null;
    $var is 'heart'|'spade'|self::Wild;
 
?>
```

## See Also

+ [Pattern matching](https://en.wikipedia.org/wiki/Pattern_matching)

Related : [Syntax](Syntax), [Algebraic Data Type](Algebraic Data Type), [Generalized Algebraic Data Type (GADT)](Generalized Algebraic Data Type (GADT)), [Sealed Class](Sealed Class), [Sum Type](Sum Type), [Option Type](Option Type), [Pattern](Pattern), [Range Type](Range Type), [Result Type](Result Type), [Structural Pattern Matching](Structural Pattern Matching)
