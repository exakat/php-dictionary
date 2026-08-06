# UnhandledMatchError
An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression. This means that all the cases have been exhausted, and then, the ``default`` case is missing. 

Instead of finishing the ``match`` expression without any returned value, it throws an exception and stops the execution. This is a different behavior than ``switch``, which will continue the processing, even if nothing was found, potentially leading to unexpected situations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unhandledmatcherror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unhandledmatcherror.html","name":"UnhandledMatchError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/UnhandledMatchError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Exception](exception.ini.html)
+ [Error](error.ini.html)
+ [Match](match.ini.html)
