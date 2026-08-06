# Handle
A handle represents a datastructure that has established a link with an independent resource. There are handles for files, for database connection, for http connections, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/handle.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/handle.html","name":"Handle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:31 +0000","dateModified":"Thu, 06 Aug 2026 05:50:31 +0000","description":"A handle represents a datastructure that has established a link with an independent resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Handle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [resource](resource.ini.html)
+ [Object](object.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [fopen()](fopen.ini.html)
+ [Client URL (CURL)](curl.ini.html)
+ [Database](database.ini.html)
