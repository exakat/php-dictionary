# ABI
An ABI, or Application Binary Interface, is the contract at the compiled level: how functions are called, how data is laid out in memory, and how structures are sized. Two pieces of compiled code can work together only if they agree on the ABI. This is different from an API, which is the contract at the source level.

The ABI is the Zend engine interface that compiled extensions, ``.so`` or ``.dll`` files, link against. A PHP extension built for one PHP version, or one build configuration, cannot be loaded by another. PHP exposes a number for this, ``PHP_API_VERSION``, and an extension checks it at load time. The check is also the reason why a PECL extension must be recompiled after a PHP upgrade.

Build options change the ABI as well. Thread-safe ZTS and non-thread-safe NTS builds have different layouts, so an extension compiled for one will not load into the other. Mixing them usually produces an error such as 'undefined symbol' or a crash at startup.

Code itself is not affected: a script runs on any PHP version that supports its syntax. The ABI only matters for native code that is loaded into the interpreter.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abi.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abi.html","name":"ABI","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 10:07:23 +0000","dateModified":"Tue, 10 Nov 2026 10:07:23 +0000","description":"An ABI, or Application Binary Interface, is the contract at the compiled level: how functions are called, how data is laid out in memory, and how structures are sized","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abi.html"]}],"alternateName":["application-binary-interface"],"keywords":["concept","internals"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stubs.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Application_binary_interface"},{"@type":"CreativeWork","name":"Application binary interface - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Application_binary_interface"},{"@type":"CreativeWork","name":"PHP Internals: Extension API","url":"https:\/\/www.php.net\/manual\/en\/internals2.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"abi"}]}]}</script>
```php
<?php

    // The ABI version of the running PHP build
    echo PHP_API_VERSION, PHP_EOL;     // e.g. 20230831

    // Whether this build is thread-safe (ZTS) or not (NTS)
    echo ZEND_THREAD_SAFE ? 'ZTS' : 'NTS', PHP_EOL;

    // A native extension must match this ABI.
    // Loading one compiled for another version fails with an error such as:
    // PHP Warning: PHP Startup: xdebug: Unable to initialize module
    // Module compiled with module API=..., PHP compiled with module API=...

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Application_binary_interface)**
## See Also

+ [Application binary interface - Wikipedia](https://en.wikipedia.org/wiki/Application_binary_interface)
+ [PHP Internals: Extension API](https://www.php.net/manual/en/internals2.php)

## Related

+ [Application Programming Interface (API)](api.html)
+ [Extensions](extension.html)
+ [Zend Engine](zend-engine.html)
+ [Thread](thread.html)
+ [Stubs Files](stubs.html)
