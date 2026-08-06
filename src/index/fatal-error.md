# Fatal Error
Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fatal-error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fatal-error.html","name":"Fatal Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Fatal error is a type of PHP error, which ends the execution of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fatal Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Deprecation](deprecation.ini.html)
+ [Error](error.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Exception](exception.ini.html)
+ [Notice](notice.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [Warning](warning.ini.html)
+ [Lint, Won't Execute](lint-wont-execute.ini.html)
+ [Method Compatibility](method-compatibility.ini.html)
