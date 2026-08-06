# display\_errors
``display_errors`` configures the display of PHP errors, warnings and notices to the standard output. By default, it is on, with the value 1. 

In production environments, it is recommended to set ``display_errors`` to 0. The error messages should be send to a logging system, for further exploitation. Otherwise, it is considered a data leak, and may lead to a vulnerability.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/display_errors.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/display_errors.html","name":"display_errors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``display_errors`` configures the display of PHP errors, warnings and notices to the standard output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/display_errors.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)**
## See Also

+ [Display Errors](https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/)

## Related

+ [Data Leak](data-leak.ini.html)
+ [Environment](environment.ini.html)
+ [Error Reporting](error-reporting.ini.html)
+ [html\_errors](html_errors.ini.html)
+ [set\_error\_handler()](set_error_handler.ini.html)
