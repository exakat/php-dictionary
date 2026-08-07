# Stream
Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things: archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html","name":"Stream","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:43:30 +0000","dateModified":"Thu, 16 Jul 2026 04:43:30 +0000","description":"Streams are a generalisation of the notion of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stream.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Stream"}]}]}</script>
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

+ [Abstraction Layer](abstraction-layer.html)
+ [Stream Wrapper](wrapper-stream.html)
+ [Stream Wrapper](stream-wrapper.html)
+ [File](file.html)
+ [php://input](php-input.html)
+ [php://output](php-output.html)
+ [php://memory](php-memory.html)
+ [php://tmp](php-tmp.html)
+ [php://filter](php-filter.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [Path](path.html)
+ [Polling](polling.html)
+ [Web Hypertext Application Technology Working Group (WHATWG)](whatwg.html)
+ [STDOUT](stdout.html)
+ [fclose()](fclose.html)
+ [fgetc()](fgetc.html)
+ [fgets()](fgets.html)
+ [fread()](fread.html)
+ [ftell()](ftell.html)
+ [fwrite()](fwrite.html)
+ [Non-blocking](non-blocking.html)
