# Fatal Error
Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html","name":"Fatal Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Fatal error is a type of PHP error, which ends the execution of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fatal Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Fatal Error"}]}]}</script>
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

+ [Deprecation](deprecation.html)
+ [Error](error.html)
+ [Error Handling](error-handling.html)
+ [Exception](exception.html)
+ [Notice](notice.html)
+ [Try-catch](try-catch.html)
+ [Warning](warning.html)
+ [Lint, Won't Execute](lint-wont-execute.html)
+ [Method Compatibility](method-compatibility.html)
