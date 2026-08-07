# Warning
A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point.

Warnings are one of the error reporting levels, between error and notice.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/warning.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/warning.html","name":"Warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Warning"}]}]}</script>
```php
<?php

include 'unknown-file.php'; // Warning, failed to open stream unknown-file.php

?>
```

**[Documentation](https://www.php.net/manual/en/errorfunc.constants.php)**
## See Also

+ [Dealing with Warnings in PHP, the Right Way](https://nyamsprod.com/blog/dealing-with-warnings-in-php-the-right-way/)

## Related

+ [Error](error.html)
+ [Notice](notice.html)
+ [Error Reporting](error-reporting.html)
+ [Fatal Error](fatal-error.html)
