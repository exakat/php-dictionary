# ReflectionException
ReflectionException is thrown whenever the Reflection API encounters an error.

Common reasons for encountering a ReflectionException include:

+ Class Not Found
+ Property Not Found
+ Method Not Found
+ Invalid Argument.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflectionexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflectionexception.html","name":"ReflectionException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"ReflectionException is thrown whenever the Reflection API encounters an error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ReflectionException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Reflection](reflection.ini.html)
