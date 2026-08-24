# Switch Case
A switch case, also called case, is an option in a ``switch()`` or a ``match()`` expression. 

In a ``switch()``, several cases may be used in a row, to apply the same code. This is not possible with ``match()``.

In a`` switch()``, the case's code is executed until the end of the ``switch()``, or a ``break`` command. A case that uses its own code, and the following case's code is called a fallthrough. 

There is a default case, which is called when all other cases fail.

In the event of multiple identical cases, the first one is used. PHP adapts the type of the values while looking for the right case.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html","name":"Switch Case","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A switch case, also called case, is an option in a switch() or a match() expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html"]}],"keywords":["keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-default.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.switch.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"switch-case"}]}]}</script>
```php
<?php

switch($x) {
    case 'a':
    case 'c':
        $a = 1;
        // fall through
        
    case 'b' :
        $a =2;
        break 1;
        
    // default case, when $x is not 'a' 'b' or 'c'
    default :
        $a = 3;
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## Related

+ [Default](default.html)
+ [Break](break.html)
+ [Switch](switch.html)
+ [Match](match.html)
+ [Switch Default](switch-default.html)
+ [Case](case.html)
