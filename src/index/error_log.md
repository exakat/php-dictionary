# Error\_log()
``error_log()`` sends an error message to a logging destination: the web server log, a file, or a remote address, depending on the ``$message_type`` argument and the ``error_log`` PHP configuration directive.

With no ``$message_type``, or ``$message_type = 0``, the message goes to whatever destination is set by the ``error_log`` directive. ``$message_type = 3`` appends the message to the file given as the ``$destination`` argument, while ``$message_type = 1`` emails the message, and ``$message_type = 4`` sends it directly to the SAPI logging handler, bypassing the ``error_log`` directive.

``error_log()`` returns ``true`` on success, and does not throw. Because its actual destination depends on runtime configuration, code that relies on ``error_log()`` for anything beyond ad-hoc debugging is usually better served by a dedicated, configurable logger, such as one implementing the PSR-3 ``LoggerInterface``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error_log.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error_log.html","name":"Error_log()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:34:43 +0000","dateModified":"Fri, 28 Aug 2026 09:34:43 +0000","description":"error_log() sends an error message to a logging destination: the web server log, a file, or a remote address, depending on the $message_type argument and the error_log PHP configuration directive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error_log.html"]}],"keywords":["native function","logging"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trigger_error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psr.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.error-log.php"},{"@type":"CreativeWork","name":"PHP: error_log - Manual","url":"https:\/\/www.php.net\/manual\/en\/errorfunc.configuration.php#ini.error-log"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"error_log"}]}]}</script>
```php
<?php

error_log('Something went wrong while processing the order');

// append to a specific file, bypassing the error_log directive
error_log('Payment failed for order #42', 3, '/var/log/payments.log');

?>
```

**[Documentation](https://www.php.net/manual/en/function.error-log.php)**
## See Also

+ [PHP: error_log - Manual](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-log)

## Related

+ [Error Handler](error-handler.html)
+ [Exception Handler](exception-handler.html)
+ [trigger\_error()](trigger_error.html)
+ [PHP Standards Recommendations (PSR)](psr.html)
