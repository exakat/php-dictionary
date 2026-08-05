# Finally
Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/finally.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/finally.ini.html","name":"Finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Finally is the default clause of a try-catch expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Try-catch](try-catch.ini.html)
+ [Catch](catch.ini.html)
+ [Exit](exit.ini.html)
+ [Resource Leak](resource-leak.ini.html)
