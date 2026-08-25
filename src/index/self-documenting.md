# Self-documenting
A self-documenting piece of code may be understood without the need to read the documentation. In particular, names are explicit and related to the application goals, and the methods and techniques are simple to relate to.

Self-documenting prevents developers from writing external documentation: this never falls out of synchronisation, as the code is the documentation itself. It also saves switching context to collect extra information.

Self-documenting relies on the reader's knowledge: one needs to have background know-how to confirm the code does what it means. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-documenting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-documenting.html","name":"Self-documenting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:42 +0000","dateModified":"Wed, 19 Aug 2026 06:47:42 +0000","description":"A self-documenting piece of code may be understood without the need to read the documentation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-documenting.html"]}],"keywords":["documentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expressive-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Self-documenting_code"},{"@type":"CreativeWork","name":"Keeping Your PHP Code Well Documented","url":"https:\/\/www.sitepoint.com\/keeping-php-code-well-documented\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"self-documenting"}]}]}</script>
```php
<?php

function multiplication(int $left, int $right): int {
    $return = $left * $right;
    
    // usage of is_float() is not obvious, or self-documenting
    if (is_float($return)) {
        throw new OverflowException('The result is too big.');
    }
    
    return $return;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Self-documenting_code)**
## See Also

+ [Keeping Your PHP Code Well Documented](https://www.sitepoint.com/keeping-php-code-well-documented/)

## Related

+ [Docblock](docblock.html)
+ [Expressive Interface](expressive-interface.html)
