# display\_errors
``display_errors`` configures the display of PHP errors, warnings and notices to the standard output. By default, it is on, with the value 1. 

In production environments, it is recommended to set ``display_errors`` to 0. The error messages should be send to a logging system, for further exploitation. Otherwise, it is considered a data leak, and may lead to a vulnerability.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/display_errors.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/display_errors.html","name":"display_errors","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"display_errors configures the display of PHP errors, warnings and notices to the standard output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/display_errors.html"]}],"keywords":["directive","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-reporting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_errors.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/errorfunc.configuration.php#ini.display-errors"},{"@type":"CreativeWork","name":"Display Errors","url":"https:\/\/developer.wordpress.org\/advanced-administration\/security\/hardening\/display-errors\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"display_errors"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)**
## See Also

+ [Display Errors](https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/)

## Related

+ [Data Leak](data-leak.html)
+ [Environment](environment.html)
+ [Error Reporting](error-reporting.html)
+ [html\_errors](html_errors.html)
+ [set\_error\_handler()](set_error_handler.html)
