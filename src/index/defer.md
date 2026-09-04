# Defer Statement
Go's ``defer`` statement schedules a function call to run when the enclosing function returns, regardless of which ``return`` statement was reached or whether a panic is in flight: ``defer file.Close()`` right after opening a file guarantees the close happens at every exit path, without needing a ``finally`` block. Multiple deferred calls run in last-in-first-out order, and they can still read and modify the function's named return values before it actually returns.

Unlike a ``try``/``finally`` block, ``defer`` is not tied to a lexical block: it can be scattered anywhere in the function body, right next to the resource acquisition it cleans up, rather than requiring the rest of the function to be wrapped in a block.

PHP has no ``defer`` statement. Guaranteed cleanup on every exit path is expressed with ``try``/``finally``, which does require wrapping the relevant code in a block, or with a destructor ``__destruct()`` that runs when the object holding the resource is garbage-collected, which is not guaranteed to happen at a predictable point in the function's execution.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defer.html","name":"Defer Statement","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"Go's defer statement schedules a function call to run when the enclosing function returns, regardless of which return statement was reached or whether a panic is in flight: defer file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defer.html"]}],"keywords":["concept","not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finally.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Manual_memory_management#Defer"},{"@type":"CreativeWork","name":"Defer statement in the Go specification","url":"https:\/\/go.dev\/ref\/spec#Defer_statements"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"defer"}]}]}</script>
```php
<?php

    // No defer: cleanup must be wrapped, or moved into a destructor.
    function readConfig(string $path): array {
        $handle = fopen($path, 'r');
        try {
            return parse($handle);
        } finally {
            fclose($handle);
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Manual_memory_management#Defer)**
## See Also

+ [Defer statement in the Go specification](https://go.dev/ref/spec#Defer_statements)

## Related

+ [Finally](finally.html)
+ [Destructor](destructor.html)
+ [Exception](exception.html)
