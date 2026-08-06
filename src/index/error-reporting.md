# Error Reporting
Error reporting is both a feature, a directive and a PHP native function. They all work with the same concept.

Error reporting is the way PHP display errors are they are detected during execution. The ``error_reporting()`` function and the ``error_reporting`` directive sets the type of error to be reported: errors are of different types.

While error reporting sets the type of reported error, the display of error is handled by different directives: ``display_errors`` and ``html_errors``.

Exceptions are not covered by the error reporting, even though one of the exception is called Error.

Error reporting may be further configured with an error handler function. 

Error may be trigger manually with the ``trigger_error()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-reporting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-reporting.html","name":"Error Reporting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:40:26 +0000","dateModified":"Wed, 24 Jun 2026 05:40:26 +0000","description":"Error reporting is both a feature, a directive and a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Error Reporting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/function.error-reporting.php)**
## See Also

+ [How to Display All PHP Errors: A Detailed Guide](https://stackify.com/display-php-errors/)

## Related

+ [Error Handler](error-handler.ini.html)
+ [@, No Scream Operator](noscream.ini.html)
+ [html\_errors](html_errors.ini.html)
+ [display\_errors](display_errors.ini.html)
+ [E](e.ini.html)
+ [Notice](notice.ini.html)
+ [trigger\_error()](trigger_error.ini.html)
+ [Warning](warning.ini.html)
+ [Error Suppression](error-suppression.ini.html)
