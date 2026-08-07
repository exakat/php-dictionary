# Error Suppression
Error suppression is achieved with the ``@`` operator placed before an expression. It silences any error, warning, or notice that expression might produce.

Using ``@`` is widely considered bad practice: it hides bugs, degrades performance, and makes debugging harder. Better alternatives include proper validation, try/catch blocks, or a custom error handler.

The ``scream`` extension and ``scream.enabled`` ini directive can disable the ``@`` operator entirely.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html","name":"Error Suppression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:54:33 +0000","dateModified":"Wed, 15 Jul 2026 13:54:33 +0000","description":"Error suppression is achieved with the ``@`` operator placed before an expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Error Suppression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Error Suppression"}]}]}</script>
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

+ [Error](error.html)
+ [@, No Scream Operator](noscream.html)
+ [Error Handling](error-handling.html)
+ [Operators](operator.html)
+ [Error Reporting](error-reporting.html)
+ [Appeasement Pattern](appeasement-pattern.html)
+ [SplSubject](splsubject.html)
