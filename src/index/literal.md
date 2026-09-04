# Literal
A literal is a hard coded value in the source.

Literals may be of type int, float, boolean, null, array.

Objects and resources cannot be hardcoded, though their creation call may be.

Literals are given names by creating a constant, global or class.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html","name":"Literal","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"A literal is a hard coded value in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html"]}],"keywords":["syntax","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hard-coded.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inlining.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php"},{"@type":"CreativeWork","name":"Literal (computer programming) - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Literal_(computer_programming)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"literal"}]}]}</script>
```php
<?php

    // Literal 1 to $a
    $a = 1;
    
    // The object is created during execution.
    $b = new X();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php)**
## See Also

+ [Literal (computer programming) - Wikipedia](https://en.wikipedia.org/wiki/Literal_(computer_programming))

## Related

+ [Destructor](destructor.html)
+ [Hard Coded](hard-coded.html)
+ [Constants](constant.html)
+ [Static Constant](class-constant.html)
+ [Inlining](inlining.html)
