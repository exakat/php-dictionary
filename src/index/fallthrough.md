# Switch Fallthrough
A fallthrough is the absence of break, or equivalent, at the end of a switch case. That way, the execution continues on the next case. 

While this is an intended feature, and is useful to reduce code, it tends to surprise programmers, who expect the cases to always end.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallthrough.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallthrough.html","name":"Switch Fallthrough","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A fallthrough is the absence of break, or equivalent, at the end of a switch case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallthrough.html"]}],"keywords":["switch"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.learncpp.com\/cpp-tutorial\/switch-fallthrough-and-scoping\/"},{"@type":"CreativeWork","name":"PHP switch Statement","url":"https:\/\/www.codeguage.com\/courses\/php\/control-flow-switch"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fallthrough"}]}]}</script>
```php
<?php

switch ($a) {
    case 1:
        $a = 2 * $a;
        // fallthrough here : the execution continues
        
    case 2:
        $a = $a + 1;
        break;
}

?>
```

**[Documentation](https://www.learncpp.com/cpp-tutorial/switch-fallthrough-and-scoping/)**
## See Also

+ [PHP switch Statement](https://www.codeguage.com/courses/php/control-flow-switch)

## Related

+ [Match](match.html)
