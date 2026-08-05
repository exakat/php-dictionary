# Stream
Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things: archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stream.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stream.ini.html","name":"Stream","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:43:30 +0000","dateModified":"Thu, 16 Jul 2026 04:43:30 +0000","description":"Streams are a generalisation of the notion of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Stream.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($stream = fopen('https://www.php.net', 'r')) {
        // print the first 100 chars of the HTML page.
        echo stream_get_contents($stream, -1, 100);
    
        fclose($stream);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.stream.php)**
## See Also

+ [Streams in PHP: What you really need to know](https://dev.to/gabrieloliverio/streams-in-php-55kb)

## Related

+ [Abstraction Layer](abstraction-layer.ini.html)
+ [Stream Wrapper](wrapper-stream.ini.html)
+ [Stream Wrapper](stream-wrapper.ini.html)
+ [File](file.ini.html)
+ [php://input](php-input.ini.html)
+ [php://output](php-output.ini.html)
+ [php://memory](php-memory.ini.html)
+ [php://tmp](php-tmp.ini.html)
+ [php://filter](php-filter.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [Path](path.ini.html)
+ [Polling](polling.ini.html)
+ [Web Hypertext Application Technology Working Group (WHATWG)](whatwg.ini.html)
+ [STDOUT](stdout.ini.html)
+ [fclose()](fclose.ini.html)
+ [fgetc()](fgetc.ini.html)
+ [fgets()](fgets.ini.html)
+ [fread()](fread.ini.html)
+ [ftell()](ftell.ini.html)
+ [fwrite()](fwrite.ini.html)
+ [Non-blocking](non-blocking.ini.html)
