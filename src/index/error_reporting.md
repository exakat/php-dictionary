# Error Reporting
Error reporting is the process to report any issue while executing the code. It is also the name of the eponymous function ``error_reporting()`` and also a ``php.ini`` directive: ``error_reporting``. They all control the way errors are handled.

Error reporting is set by calling the ``error_reporting()`` function, with a combination of constants: ``E_ERROR``, ``E_WARNING``, ``E_PARSE``, ``E_NOTICE``, ``E_CORE_ERROR``, ``E_CORE_WARNING``, ``E_COMPILE_ERROR``, ``E_COMPILE_WARNING``, ``E_USER_ERROR``, ``E_USER_WARNING``, ``E_USER_NOTICE``, ``E_STRICT``, ``E_RECOVERABLE_ERROR``, ``E_DEPRECATED``, ``E_USER_DEPRECATED``, ``E_ALL``. They are combined as a bitfield, or may be replaced by their integer counterpart. One special value is ``-1``, which is the universal error reporting: it activates all types of errors, past present and future.

``error_reporting``, the directive, is set in the ``php.ini`` file. It doesn't support the bitfield, so it must be set as an integer.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error_reporting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error_reporting.html","name":"Error Reporting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"Error reporting is the process to report any issue while executing the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Error Reporting.html"]}],"keywords":["directive","native function","error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-combinaison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/log-file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.error-reporting.php"},{"@type":"CreativeWork","name":"How to Enable PHP Error Reporting","url":"https:\/\/www.scoutapm.com\/blog\/how-to-enable-php-error-reporting\/"},{"@type":"CreativeWork","name":"error_reporting, the directive","url":"https:\/\/www.php.net\/manual\/en\/errorfunc.configuration.php#ini.error-reporting"},{"@type":"CreativeWork","name":"How to Display All PHP Errors: A Detailed Guide","url":"https:\/\/stackify.com\/display-php-errors\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"error_reporting"}]}]}</script>
```php
<?php

    // Turn off all error reporting
    error_reporting(0);
    
    // Report simple running errors
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    // Reporting E_NOTICE can be good too (to report uninitialized
    // variables or catch variable name misspellings ...)
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    
    // Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);

?>
```

**[Documentation](https://www.php.net/manual/en/function.error-reporting.php)**
## See Also

+ [How to Enable PHP Error Reporting](https://www.scoutapm.com/blog/how-to-enable-php-error-reporting/)
+ [error_reporting, the directive](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting)
+ [How to Display All PHP Errors: A Detailed Guide](https://stackify.com/display-php-errors/)

## Related

+ [set\_error\_handler()](set_error_handler.html)
+ [Constant Combination](constant-combinaison.html)
+ [Log File](log-file.html)

## Related packages

+ [filp/whoops](https://packagist.org/packages/filp/whoops)
