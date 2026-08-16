# Pattern Matching
Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables. In a sense it serves a similar purpose for complex data structures as regular expressions do for strings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html","name":"Pattern Matching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:09:08 +0000","dateModified":"Wed, 08 Jul 2026 16:09:08 +0000","description":"Pattern Matching as a language concept contains two parts: matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pattern Matching.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pattern-matching"}]}]}</script>
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

+ [Syntax](syntax.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Generalized Algebraic Data Type (GADT)](gadt.html)
+ [Sealed Class](sealed-class.html)
+ [Sum Type](sum-type.html)
+ [Option Type](option-type.html)
+ [Pattern](pattern.html)
+ [Range Type](range-type.html)
+ [Result Type](result-type.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
