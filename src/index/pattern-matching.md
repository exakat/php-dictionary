# Pattern Matching
Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables. In a sense it serves a similar purpose for complex data structures as regular expressions do for strings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pattern-matching.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pattern-matching.html","name":"Pattern Matching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:09:08 +0000","dateModified":"Wed, 08 Jul 2026 16:09:08 +0000","description":"Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pattern Matching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://wiki.php.net/rfc/pattern-matching)**
## See Also

+ [Pattern matching](https://en.wikipedia.org/wiki/Pattern_matching)

## Related

+ [Syntax](syntax.ini.html)
+ [Algebraic Data Type](algebraic-data-type.ini.html)
+ [Generalized Algebraic Data Type (GADT)](gadt.ini.html)
+ [Sealed Class](sealed-class.ini.html)
+ [Sum Type](sum-type.ini.html)
+ [Option Type](option-type.ini.html)
+ [Pattern](pattern.ini.html)
+ [Range Type](range-type.ini.html)
+ [Result Type](result-type.ini.html)
+ [Structural Pattern Matching](structural-pattern-matching.ini.html)
