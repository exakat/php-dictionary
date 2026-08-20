# ReflectionException
ReflectionException is thrown whenever the Reflection API encounters an error.

Common reasons for encountering a ReflectionException include:

+ Class Not Found
+ Property Not Found
+ Method Not Found
+ Invalid Argument.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflectionexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflectionexception.html","name":"ReflectionException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:00:00 +0000","dateModified":"Fri, 14 Aug 2026 08:00:00 +0000","description":"ReflectionException is thrown whenever the Reflection API encounters an error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ReflectionException.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.reflectionexception.php"},{"@type":"CreativeWork","name":"ReflectionClass Class","url":"https:\/\/www.php.net\/manual\/en\/class.reflectionclass.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reflectionexception"}]}]}</script>
```php
<?php

    try
    {
        $ref = new ReflectionClass($class);
    }
    catch (ReflectionException $e)
    {
        var_dump($e->getMessage());
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.reflectionexception.php)**
## See Also

+ [ReflectionClass Class](https://www.php.net/manual/en/class.reflectionclass.php)

## Related

+ [Reflection](reflection.html)
