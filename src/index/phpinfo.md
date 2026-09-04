# phpinfo()
``phpinfo()`` is one of the most famous PHP functions. It outputs information about PHP's configuration and compilation, in HTML format.

By default, ``phpinfo()`` prints the PHP version, the operating system it runs on, the build date, the compiler used, the Server API, and the full list of loaded extensions with each of their own settings. It also lists every directive currently defined in ``php.ini``, along with its local and master value, the configured include path, environment variables, HTTP headers of the current request, and PHP's license information. An optional integer argument, made of the ``INFO_*`` constants combined with a bitwise OR, restricts the output to a subset of these sections, such as ``INFO_MODULES`` or ``INFO_VARIABLES``; the default is ``INFO_ALL``.

``phpinfo()`` has existed since PHP 4, and is frequently one of the first functions used to verify that PHP is correctly installed and configured on a server, traditionally by dropping a single-line ``<?php phpinfo(); ?>`` file and requesting it through a browser.

Leaving such a file accessible on a production server is a well-known security risk: it discloses the absolute file paths, loaded extensions and their versions, and configuration details, such as ``disable_functions`` or ``open_basedir``, that an attacker can use to fingerprint the server and look for known vulnerabilities matching that exact configuration. For this reason, static analyzers and security scanners typically flag any call to ``phpinfo()`` left in deployed code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpinfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpinfo.html","name":"phpinfo()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"phpinfo() is one of the most famous PHP functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpinfo.html"]}],"keywords":["native function","configuration","famous"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.phpinfo"},{"@type":"CreativeWork","name":"Part 1\/3: Understanding phpinfo() \u2014 The Accidental Goldmine","url":"https:\/\/medium.com\/@cybersecplayground\/part-1-3-understanding-phpinfo-the-accidental-goldmine-c662da63a3c7"},{"@type":"CreativeWork","name":"Pretty PHP Info: A Modern Replacement for `phpinfo()`","url":"https:\/\/laravel-news.com\/pretty-phpinfo"},{"@type":"CreativeWork","name":"Offensive Internet Posture","url":"https:\/\/bruceediger.com\/posts\/offensive-machine\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"phpinfo"}]}]}</script>
```php
<?php

    // Show all information, defaults to INFO_ALL
    phpinfo();

?>
```

**[Documentation](https://www.php.net/manual/en/function.phpinfo)**
## See Also

+ [Part 1/3: Understanding phpinfo() — The Accidental Goldmine](https://medium.com/@cybersecplayground/part-1-3-understanding-phpinfo-the-accidental-goldmine-c662da63a3c7)
+ [Pretty PHP Info: A Modern Replacement for `phpinfo()`](https://laravel-news.com/pretty-phpinfo)
+ [Offensive Internet Posture](https://bruceediger.com/posts/offensive-machine/)

## Related

+ [Leak](leak.html)
+ [php\\.ini](php.ini.html)
+ [Compiler](compiler.html)
