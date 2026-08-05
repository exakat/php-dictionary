# Self-documenting
A self-documenting piece of code may be understood without the need to read the documentation. In particular, names are explicit and related to the application goals, and the methods and techniques are simple to relate to.

Self-documenting prevents developers to write external documentation: this never fall out of synchronisation, as the code is the documentation itself. It also saves switching context to collect extra information.

Self-documenting relies on the reader's knowledge: one need to have background know-how to confirm the code does what it means. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self-documenting.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self-documenting.ini.html","name":"Self-documenting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A self-documenting piece of code may be understood without the need to read the documentation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Self-documenting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Docblock](docblock.ini.html)
+ [Expressive Interface](expressive-interface.ini.html)
