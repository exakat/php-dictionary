# Stream
Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things: archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html","name":"Stream","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Streams are a generalisation of the notion of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stream.html"]}],"keywords":["feature","filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction-layer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream-wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-input.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-output.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tmp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/whatwg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.stream.php"},{"@type":"CreativeWork","name":"Streams in PHP: What you really need to know","url":"https:\/\/dev.to\/gabrieloliverio\/streams-in-php-55kb"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stream"}]}]}</script>
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
