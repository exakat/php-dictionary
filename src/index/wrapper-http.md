# http://
The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server. It handles both ``HTTP`` and ``HTTPS``.

The ``http://`` and ``https://`` wrappers are part of PHP's streams layer, which lets many filesystem-oriented functions, such as ``file_get_contents()``, ``file_put_contents()``, ``fopen()``, ``copy()``, or ``include()``, transparently operate on a remote URL as if it were a local file. Under the hood, the wrapper opens a TCP connection to the target host, sends an HTTP request, by default a ``GET``, and exposes the response body as a readable, and for a limited subset of operations writable, stream. The response headers sent back by the server are made available afterwards through the special ``$http_response_header`` variable, populated in the calling scope.

Because this wrapper is enabled through the ``allow_url_fopen`` directive, which defaults to ``On``, functions that were only meant to handle local paths can end up fetching arbitrary remote content whenever a URL is passed instead of a filename. This is the root cause of a well-known class of vulnerabilities called Remote File Inclusion, RFI, where an attacker controls a path passed to ``include()`` or ``require()``, and supplies a URL pointing to malicious PHP code hosted elsewhere. For this reason, ``allow_url_include``, a separate and stricter directive controlling whether URLs can be used with ``include()``/``require()`` specifically, defaults to ``Off``, and many production configurations also disable ``allow_url_fopen`` entirely, forcing remote requests to go through a dedicated HTTP client such as cURL instead.

The behavior of the wrapper, including the request method, additional headers, timeout, and whether redirects are followed, can be customized through a stream context created with ``stream_context_create()`` and its ``http`` options, then passed as an extra argument to functions such as ``file_get_contents()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-http.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-http.html","name":"http:\/\/","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:40:53 +0000","dateModified":"Mon, 17 Aug 2026 09:40:53 +0000","description":"The http:\/\/ wrapper is a native PHP wrapper, to access files on a remote HTTP web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http:\/\/.html"]}],"alternateName":["wrapper-https"],"keywords":["wrapper"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/wrappers.http.php"},{"@type":"CreativeWork","name":"PHP wrappers","url":"https:\/\/pentesterlab.com\/glossary\/php-wrappers"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wrapper-http"}]}]}</script>
```php
<?php

    // display the raw incoming data
    print_r(file_get_content('https://www.php.net/'));

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.http.php)**
## See Also

+ [PHP wrappers](https://pentesterlab.com/glossary/php-wrappers)

## Related

+ [Wrapper](wrapper.html)
+ [PHP Wrappers](php-wrapper.html)
