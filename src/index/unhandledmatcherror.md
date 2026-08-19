# UnhandledMatchError
An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression. This means that all the cases have been exhausted, and then, the ``default`` case is missing. 

Instead of finishing the ``match`` expression without any returned value, it throws an exception and stops the execution. This is a different behavior than ``switch``, which will continue the processing, even if nothing was found, potentially leading to unexpected situations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unhandledmatcherror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unhandledmatcherror.html","name":"UnhandledMatchError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An UnhandledMatchError error is thrown when the subject passed to a match expression is not handled by any case of the match expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/UnhandledMatchError.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.unhandledmatcherror.php"},{"@type":"CreativeWork","name":"Match expression","url":"https:\/\/php.watch\/versions\/8.0\/match-expression"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unhandledmatcherror"}]}]}</script>
```php
<?php

    $b = match(3) {
        1 => 'A',
        2 => 'b',
    };

?>
```

**[Documentation](https://www.php.net/manual/en/class.unhandledmatcherror.php)**
## See Also

+ [Match expression](https://php.watch/versions/8.0/match-expression)

## Related

+ [Exception](exception.html)
+ [Error](error.html)
+ [Match](match.html)
