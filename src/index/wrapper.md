# Wrapper
A wrapper may refer to two distinct things depending on the context, which is why this entry is a disambiguation page. The first, and most PHP-specific, meaning is a stream wrapper: a built-in or user-registered handler that lets PHP's stream functions, such as ``fopen()``, ``file_get_contents()``, and ``include()``, transparently work with a particular URL-style protocol or resource type as if it were a local file. PHP ships with wrappers for protocols like ``http://``, ``https://``, ``ftp://``, ``ftps://``, ``php://``, and ``file://``, each translating stream operations, reading, writing, seeking, into the appropriate network calls or system behavior for that protocol, and custom wrappers can be registered at runtime with ``stream_wrapper_register()`` to add support for entirely new schemes, such as accessing a database, a compressed archive, or an in-memory buffer through ordinary file functions. The second meaning comes from object-oriented design: the wrapper, or adapter, design pattern, where a class wraps another object or a different, often incompatible, interface, exposing a new API on top of it while delegating the underlying work, commonly used to adapt a third-party library's interface to what an application expects, or to add extra behavior, such as logging or caching, around an existing object without modifying it. This second usage is closely related to, and sometimes used interchangeably with, the facade pattern.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html","name":"Wrapper","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 14:35:13 +0000","dateModified":"Thu, 03 Sep 2026 14:35:13 +0000","description":"A wrapper may refer to two distinct things depending on the context, which is why this entry is a disambiguation page","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"]}],"keywords":["disambiguation","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-designpattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/https.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-php.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftps.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/facade.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-ftp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/wrappers.php"},{"@type":"CreativeWork","name":"Php wrapper and Local File Inclusion","url":"https:\/\/medium.com\/@robsfromashes\/php-wrapper-and-local-file-inclusion-2fb82c891f55"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wrapper"}]}]}</script>
```php
<?php

    // the PHP wrapper http
    $html = file_get_content('http://www.php.net/');

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php)**
## See Also

+ [Php wrapper and Local File Inclusion](https://medium.com/@robsfromashes/php-wrapper-and-local-file-inclusion-2fb82c891f55)

## Related

+ [Stream Wrapper](wrapper-stream.html)
+ [Design Pattern Wrapper](wrapper-designpattern.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Hyper Text Transfer Protocol Secure (HTTPS)](https.html)
+ [php://](wrapper-php.html)
+ [Wrapper Pattern](wrapper-pattern.html)
+ [File Transfer Protocol (FTP)](ftp.html)
+ [File Transfer Protocol Secure (FTPS)](ftps.html)
+ [PHP Wrappers](php-wrapper.html)
+ [Protocol](protocol.html)
+ [file://](wrapper-file.html)
+ [Facade](facade.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [ftp://](wrapper-ftp.html)
+ [http://](wrapper-http.html)
+ [php://filter](php-filter.html)
