# Catchable Fatal Error
A catchable fatal error is a fatal error that PHP allows user code to intercept before the script terminates, instead of stopping execution unconditionally.

Since PHP 7, most fatal errors are represented as ``Error`` objects, which implement ``Throwable`` and can be intercepted with a ``try``/``catch`` block, making them catchable by nature. Before PHP 7, a narrower category existed as its own error level, ``E_RECOVERABLE_ERROR``, notably raised when an object without a ``__toString()`` method was used in a string context; it could only be intercepted through a custom error handler set with ``set_error_handler()``, not with ``catch``.

If a catchable fatal error is not actually caught, it behaves exactly like an ordinary fatal error: execution stops.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catchable-fatal-error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catchable-fatal-error.html","name":"Catchable Fatal Error","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:38:49 +0000","dateModified":"Thu, 27 Aug 2026 05:38:49 +0000","description":"A catchable fatal error is a fatal error that PHP allows user code to intercept before the script terminates, instead of stopping execution unconditionally","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catchable-fatal-error.html"]}],"alternateName":["recoverable-error"],"keywords":["error","specification"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.errors.php7.php"},{"@type":"CreativeWork","name":"PHP Language Specification: Terms and Definitions","url":"https:\/\/phplang.org\/spec\/03-terms-and-definitions.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"catchable-fatal-error"}]}]}</script>
```php
<?php

    class NoConversion {}
    
    try {
        $s = (string) new NoConversion(); // fatal error, but catchable
    } catch (\Error $e) {
        echo 'Caught: ' . $e->getMessage();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.errors.php7.php)**
## See Also

+ [PHP Language Specification: Terms and Definitions](https://phplang.org/spec/03-terms-and-definitions.html)

## Related

+ [Fatal Error](fatal-error.html)
+ [Error](error.html)
+ [Throwable](throwable.html)
+ [set\_error\_handler()](set_error_handler.html)
