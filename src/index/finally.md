# Finally
Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finally.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finally.html","name":"Finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Finally is the default clause of a try-catch expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Finally.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"finally"}]}]}</script>
```php
<?php

    try {
        doSomething();
    } catch (\Exception $e) {
        print "An exception was raised and caught";
    } finally {
        print "Finally\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally)**
## See Also

+ [How to use Try - Catch - Finally in PHP](https://thecodeprogram.com/blog/how-to-use-try---catch---finally-in-php/)

## Related

+ [Try-catch](try-catch.html)
+ [Catch](catch.html)
+ [Exit](exit.html)
+ [Resource Leak](resource-leak.html)
