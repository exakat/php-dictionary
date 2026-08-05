# Warning
A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point.

Warnings are one of the error reporting levels, between error and notice.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/warning.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/warning.ini.html","name":"Warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

include 'unknown-file.php'; // Warning, failed to open stream unknown-file.php

?>
```

**[Documentation](https://www.php.net/manual/en/errorfunc.constants.php)**
## See Also

+ [Dealing with Warnings in PHP, the Right Way](https://nyamsprod.com/blog/dealing-with-warnings-in-php-the-right-way/)

## Related

+ [Error](error.ini.html)
+ [Notice](notice.ini.html)
+ [Error Reporting](error-reporting.ini.html)
+ [Fatal Error](fatal-error.ini.html)
