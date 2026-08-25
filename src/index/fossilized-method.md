# Fossilized Methods
A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code.

The easiest solution to this situation is to refrain from updating the signature anymore. At that point, the method is fossilized.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fossilized-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fossilized-method.html","name":"Fossilized Methods","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fossilized-method.html"]}],"keywords":["structure","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Technical_debt"},{"@type":"CreativeWork","name":"Method fossilisation","url":"https:\/\/www.exakat.io\/en\/method-fossilisation\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fossilized-method"}]}]}</script>
```php
<?php

class x {
    function foo(A $a) : array {}
}

class y1 extends x {
    function foo(A $a) : array {}
}

class y2 extends x {
    function foo(A $a) : array {}
}

// Updating this method means updating y2, y1, x... 
class yN extends x {
    function foo(A $a) : array {}
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Technical_debt)**
## See Also

+ [Method fossilisation](https://www.exakat.io/en/method-fossilisation/)

## Related

+ [Method](method.html)
