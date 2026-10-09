# stream\_select()
``stream_select()`` is a native PHP function that waits until one or more streams are ready for reading, writing, or have an exceptional condition, using the system ``select()`` call.

It takes three arrays of streams, passed by reference: ``$read``, ``$write`` and ``$except``. On return, each array is reduced to the streams that are ready; the others are removed. The fourth and fifth arguments set the timeout in seconds and microseconds. A ``null`` timeout blocks until at least one stream is ready.

The function returns the number of streams that changed state, ``0`` if the timeout expired before any stream was ready, or ``false`` on error. Because the arrays are modified in place, the original list of streams must be kept separately if it is needed again.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_select.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_select.html","name":"stream_select()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:16:49 +0000","dateModified":"Fri, 09 Oct 2026 17:16:49 +0000","description":"stream_select() is a native PHP function that waits until one or more streams are ready for reading, writing, or have an exceptional condition, using the system select() call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_select.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.stream-select.php"},{"@type":"CreativeWork","name":"stream_select","url":"https:\/\/www.php.net\/manual\/en\/function.stream-select.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stream_select"}]}]}</script>
```php
<?php

    $read   = [$socket1, $socket2];
    $write  = null;
    $except = null;

    // Wait up to 5 seconds for data on either socket
    $changed = stream_select($read, $write, $except, 5);

    if ($changed === false) {
        die('stream_select() failed');
    }

    if ($changed === 0) {
        echo 'Timeout: no data received';
    } else {
        foreach ($read as $stream) {
            echo fread($stream, 1024);
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.stream-select.php)**
## See Also

+ [stream_select](https://www.php.net/manual/en/function.stream-select.php)

## Related

+ [Stream](stream.html)
+ [Socket](socket.html)
+ [Polling](polling.html)
+ [Non-blocking](non-blocking.html)
