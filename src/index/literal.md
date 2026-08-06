# Literal
A literal is a hard coded value in the source.

Literal may be of type int, float, boolean, null, array. 

Objects and resources cannot be hardcoded, though their creation call may be.

Literals are given names by creating a constant, global or class.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/literal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/literal.html","name":"Literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A literal is a hard coded value in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Literal 1 to $a
    $a = 1;
    
    // The object is created during execution.
    $b = new X();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php)**
## Related

+ [Destructor](destructor.ini.html)
+ [Hard Coded](hardcoded.ini.html)
+ [Constants](constant.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [Inlining](inlining.ini.html)
