# Error Handling
Error handling is a broad concept that covers the different ways that PHP uses to signal that an error occurred. 

The main systems are the error reporting, and the exceptions. 

The error reporting is often associated with native errors, although it is possible to raise them and handle them with error-handlers.

The exception system is based on the throw, try and catch keywords.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html","name":"Error Handling","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Error handling is a broad concept that covers the different ways that PHP uses to signal that an error occurred","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Error Handling.html"]}],"keywords":["error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/downtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rollback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/troubleshoot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ref.errorfunc.php"},{"@type":"CreativeWork","name":"PHP Error Handling and Exceptions: Best practices for robust applications","url":"https:\/\/roman-huliak.medium.com\/php-error-handling-and-exceptions-best-practices-for-robust-applications-c02cf5e225f7"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"error-handling"}]}]}</script>
```php
<?php

    trigger_error('Cannot do this', E_USER_ERROR);
    
    try {
        throw new Exception('Cannot do this');
    } catch (Exception $e) {
        print $e->getMessage();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/ref.errorfunc.php)**
## See Also

+ [PHP Error Handling and Exceptions: Best practices for robust applications](https://roman-huliak.medium.com/php-error-handling-and-exceptions-best-practices-for-robust-applications-c02cf5e225f7)

## Related

+ [Exception](exception.html)
+ [Error Handler](error-handler.html)
+ [Downtime](downtime.html)
+ [Fatal Error](fatal-error.html)
+ [Rollback](rollback.html)
+ [Troubleshoot](troubleshoot.html)
+ [Error Suppression](error-suppression.html)
