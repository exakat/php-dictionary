# ftp://
The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server. It handles both ``FTP`` and ``FTPS``.

Because it is a stream wrapper, ``ftp://``, and its encrypted counterpart ``ftps://``, can be used directly wherever PHP accepts a filesystem path, including functions like ``file_get_contents()``, ``file_put_contents()``, ``fopen()``, ``copy()``, and ``file_exists()``. Credentials and the target path are encoded in the URL itself, in the form ``ftp://user:password@host:port/path``, and the wrapper supports both reading and, depending on server permissions, writing and appending.

Using the ``ftp://`` wrapper requires PHP's ``allow_url_fopen`` setting to be enabled, and, because credentials travel in the URL and plain FTP transmits data unencrypted, it is generally safer to prefer ``ftps://`` or a dedicated SFTP/SSH2-based approach when handling sensitive data over an untrusted network.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wrapper-ftp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wrapper-ftp.ini.html","name":"ftp:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:17:54 +0000","dateModified":"Tue, 04 Aug 2026 11:17:54 +0000","description":"The ``ftp:\/\/`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftp:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // display a distant file from a FTP server
    print_r(file_get_content('ftp://user:password@ftp.server.com:/pub/file.txt'));

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.ftp.php)**
## See Also

+ [Mastering PHP Wrappers: Concepts, Use Cases, and Security Risks](https://medium.com/@zoningxtr/mastering-php-wrappers-concepts-use-cases-and-security-risks-380bb59cb6c1)

## Related

+ [Wrapper](wrapper.ini.html)
+ [PHP Wrappers](php-wrapper.ini.html)
