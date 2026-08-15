# Stream Wrapper
A stream wrapper is additional code which tells the stream how to handle specific protocols and encodings. 

PHP supports several wrappers natively, in particular ``file://``, ``http://``, ``ftp://``, ``php://``, ``zlib://``, ``data://``, ``glob://``, ``phar://``, ``ssh2://``, ``rar://``, ``ogg://`` and ``expect://``.

Customs wrappers may be registered with ``stream_wrapper_register()``. A wrapper may write in any kind of format. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html","name":"Stream Wrapper","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A stream wrapper is additional code which tells the stream how to handle specific protocols and encodings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stream Wrapper.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wrapper-stream"}]}]}</script>
```php
<?php

    // opening a file with the file wrapper
    $fp = fopen('file://tmp/myfile.txt', 'r+');
    
    // opening a file with the ftp wrapper
    $fp = fopen('ftp://user:password@example.com/pub/file.txt', 'r+');
    
    // opening a file with the phar wrapper
    $fp = fopen('phar://someFile.txt', 'r+');

?>
```

**[Documentation](https://www.php.net/manual/en/book.stream.php)**
## See Also

+ [A Guide to Streams in PHP: In-Depth Tutorial With Examples](https://stackify.com/a-guide-to-streams-in-php-in-depth-tutorial-with-examples/)
+ [Supported Protocols and Wrappers](https://www.php.net/manual/en/wrappers.php)
+ [stream_wrapper_register()](https://www.php.net/manual/en/function.stream-wrapper-register.php)
+ [Example class registered as stream wrapper](https://www.php.net/manual/en/stream.streamwrapper.example-1.php)

## Related

+ [Protocol](protocol.html)
+ [Stream](stream.html)
