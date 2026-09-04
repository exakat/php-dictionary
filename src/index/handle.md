# Handle
A handle represents a datastructure that has established a link with an independent resource. There are handles for files, for database connection, for http connections, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html","name":"Handle","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:26:04 +0000","dateModified":"Wed, 19 Aug 2026 08:26:04 +0000","description":"A handle represents a datastructure that has established a link with an independent resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html"]}],"keywords":["data structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.resource.php"},{"@type":"CreativeWork","name":"Handle (computing)","url":"https:\/\/en.wikipedia.org\/wiki\/Handle_(computing)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"handle"}]}]}</script>
```php
<?php

    $handle = fopen("c:\folder\resource.txt", r);
    $string = fread($handle);
    fclose($handle);

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.resource.php)**
## See Also

+ [Handle (computing)](https://en.wikipedia.org/wiki/Handle_(computing))

## Related

+ [resource](resource.html)
+ [Object](object.html)
+ [Data Structure](datastructure.html)
+ [fopen()](fopen.html)
+ [Client URL (CURL)](curl.html)
+ [Database](database.html)
