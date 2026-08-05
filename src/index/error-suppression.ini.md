# Error Suppression
Error suppression is achieved with the ``@`` operator placed before an expression. It silences any error, warning, or notice that expression might produce.

Using ``@`` is widely considered bad practice: it hides bugs, degrades performance, and makes debugging harder. Better alternatives include proper validation, try/catch blocks, or a custom error handler.

The ``scream`` extension and ``scream.enabled`` ini directive can disable the ``@`` operator entirely.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-suppression.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-suppression.ini.html","name":"Error Suppression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:54:33 +0000","dateModified":"Wed, 15 Jul 2026 13:54:33 +0000","description":"Error suppression is achieved with the ``@`` operator placed before an expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Error Suppression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Bad practice: silences errors
    $result = @file_get_contents('missing.txt');
    
    // Better: check first
    if (file_exists('missing.txt')) {
        $result = file_get_contents('missing.txt');
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.errorcontrol.php)**
## Related

+ [Error](error.ini.html)
+ [@, No Scream Operator](noscream.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Operators](operator.ini.html)
+ [Error Reporting](error-reporting.ini.html)
+ [Appeasement Pattern](appeasement-pattern.ini.html)
+ [SplSubject](splsubject.ini.html)
