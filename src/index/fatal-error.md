# Fatal Error
Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html","name":"Fatal Error","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 04:45:24 +0000","dateModified":"Thu, 27 Aug 2026 04:45:24 +0000","description":"Fatal error is a type of PHP error, which ends the execution of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"]}],"keywords":["error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catchable-fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/notice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/warning.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.errors.php7.php"},{"@type":"CreativeWork","name":"A Guide to: PHP Fatal errors","url":"https:\/\/trunc.org\/learning\/php-fatal-errors"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fatal-error"}]}]}</script>
```php
<?php

    try {
        1 + [];
    } catch (Error $e) {
        print A fatal error was caught.;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.errors.php7.php)**
## See Also

+ [A Guide to: PHP Fatal errors](https://trunc.org/learning/php-fatal-errors)

## Related

+ [Catchable Fatal Error](catchable-fatal-error.html)
+ [Deprecation](deprecation.html)
+ [Error](error.html)
+ [Error Handling](error-handling.html)
+ [Exception](exception.html)
+ [Notice](notice.html)
+ [Try-catch](try-catch.html)
+ [Warning](warning.html)
+ [Lint, Won't Execute](lint-wont-execute.html)
+ [Method Compatibility](method-compatibility.html)
