# Error Reporting
Error reporting is both a feature, a directive and a PHP native function. They all work with the same concept.

Error reporting is the way PHP display errors are they are detected during execution. The ``error_reporting()`` function and the ``error_reporting`` directive sets the type of error to be reported: errors are of different types.

While error reporting sets the type of reported error, the display of error is handled by different directives: ``display_errors`` and ``html_errors``.

Exceptions are not covered by the error reporting, even though one of the exception is called Error.

Error reporting may be further configured with an error handler function. 

Error may be trigger manually with the ``trigger_error()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-reporting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-reporting.html","name":"Error Reporting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Error reporting is both a feature, a directive and a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Error Reporting.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"error-reporting"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/function.error-reporting.php)**
## See Also

+ [How to Display All PHP Errors: A Detailed Guide](https://stackify.com/display-php-errors/)

## Related

+ [Error Handler](error-handler.html)
+ [@, No Scream Operator](noscream.html)
+ [html\_errors](html_errors.html)
+ [display\_errors](display_errors.html)
+ [E](e.html)
+ [Notice](notice.html)
+ [trigger\_error()](trigger_error.html)
+ [Warning](warning.html)
+ [Error Suppression](error-suppression.html)
