# Literal
A literal is a hard coded value in the source.

Literal may be of type int, float, boolean, null, array. 

Objects and resources cannot be hardcoded, though their creation call may be.

Literals are given names by creating a constant, global or class.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html","name":"Literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A literal is a hard coded value in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Literal"}]}]}</script>
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

+ [Destructor](destructor.html)
+ [Hard Coded](hardcoded.html)
+ [Constants](constant.html)
+ [Static Constant](class-constant.html)
+ [Inlining](inlining.html)
